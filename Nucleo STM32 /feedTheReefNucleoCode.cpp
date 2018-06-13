#include "mbed.h"
#include "DS1820.h"

PwmOut feeder(PA_6);
PwmOut light(PA_7);
AnalogIn ph(A1);


Serial pc_usb(USBTX, USBRX);

float temperatureValue;
float ph_value;

int main() {
    light.write(1); //Light powered off at start
    feeder.write(1); //Engine feeder of fat start
    
    
    DS1820  ds1820(PA_9);  //temperature
    ds1820.begin();
    ds1820.startConversion();   // start temperature conversion
    wait(1.0); // let DS1820 complete the temperature conversion
    
    
                     
    
    
    while(true) {
        char c = pc_usb.getc(); // Read hyperterminal
        if (c == 'a') { // Feed the reef
            feeder.write(0);
            wait(0.04);
            feeder.write(1);
            pc_usb.printf("\n1");
        }
        
        if (c == 'b') { // Retrieve temperature
            ds1820.startConversion();     // start temperature conversion
            wait(0.1);                    // let DS1820 complete the temperature conversion
            pc_usb.printf("\n%3.1f", ds1820.read());
        }
        if (c == 'c') { // Lights ON!
              if(light.read() * 100>99){
                light.write(0);
                pc_usb.printf("\n1");
                }else{
                    light.write(1);
                    pc_usb.printf("\n0");
                }
              
            
        }
        if (c == 'd') { 
            
            ph_value = (ph.read()*16); // Converts and read the analog input value (value from 0.0 to 1.0)
            pc_usb.printf("\n%f",ph_value);
            wait(1);
        }
    }
}
 

