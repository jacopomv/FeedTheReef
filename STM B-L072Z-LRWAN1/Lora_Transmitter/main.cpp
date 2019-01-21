/*
 *
 * Author Enrico Giulio Maria Verzegnassi
 * Pervasive systems 2018
 *
 * Credits:
 * Copyright (c) 2017 Helmut Tschemernjak
 * 30826 Garbsen (Hannover) Germany
 *
 * Licensed under the Apache License, Version 2.0);
 */
 #include "main.h"
 #include "AES.h"
 #include "DS1820.h"
 #include "mbed.h"
#include <sstream>
#include <string>

DigitalOut myled(LED1);
BufferedSerial *ser;


AnalogIn ph(A1);  //PH
DS1820 ds1820('b',D8);  //temperature sensor




 void printData(const void* data, size_t length)
 {
     const char* dataBytes = (const char*)data;
     for (size_t i = 0; i < length; i++) {
         if ((i % 8) == 0)
             printf("\n\t");
         printf("0x%02X, ", dataBytes[i]);
     }
     printf("\n");
 }

void initTemperatureSensor(){ 
    if(ds1820.begin()) {   
        ds1820.startConversion();   // start temperature conversion
        wait(1.0); // let DS1820 complete the temperature conversion
        dprintf("FOUNDED DS1820 sensor found!");
    }else{
        dprintf("No DS1820 sensor found!");
    }
}

float retriveTemperature(){    // Retrieve temperature
    float temperatureValue=ds1820.read();
    ds1820.startConversion();     // start temperature conversion
    wait(0.1);                    // let DS1820 complete the temperature conversion
    
    return temperatureValue;
}
//Return the PH value after 10 mesurements
float retrivePH(){
    float arrayOfPHValue [10]={0};
    for(int i=0;i<10;i++){
        arrayOfPHValue[i] = (ph.read()); // Converts and read the analog input value (value from 0.0 to 1.0)
        wait_ms(1500);
        dprintf("PH single value %f",arrayOfPHValue[i]);
    }
    float sum=0;
    for(int i=0;i<10;i++){
        sum += arrayOfPHValue[i];
    }
    float ph_value=(((sum/10)*14.5)-1)*(-10);
    dprintf("PH TOTAL VALUE %f",ph_value);
    return ph_value;
}

//Encryption parameters
const char key[32] = {
         0x60, 0x3D, 0xEB, 0x10, 0x15, 0xCA, 0x71, 0xBE,
         0x2B, 0x73, 0xAE, 0xF0, 0x85, 0x7D, 0x77, 0x81,
         0x1F, 0x35, 0x2C, 0x07, 0x3B, 0x61, 0x08, 0xD7,
         0x2D, 0x98, 0x10, 0xA3, 0x09, 0x14, 0xDF, 0xF4
};
const char iv[16] = {
         0x74, 0x11, 0xF0, 0x45, 0xD6, 0xA4, 0x3F, 0x69,
         0x18, 0xC6, 0x75, 0x42, 0xDF, 0x4C, 0xA7, 0x84
};

int main() {
    //System configuration
    SystemClock_Config();
    ser = new BufferedSerial(USBTX, USBRX);
    ser->baud(9600);
    ser->format(8);
    ser->printf("Hello World\n\r");
    myled = 1;
    
    //Digital
    initTemperatureSensor();
    float temperature=0; 

    //Analog
    float ph=0;

    //Init encryption algorithm
    AES aes;
    aes.setup(key, AES::KEY_256, AES::MODE_CBC, iv);
    
    //Timelife mesurments
    while (1){
        myled = 1;
        temperature = retriveTemperature();
        ph = retrivePH();
        
        char message[30] = {0};
        int t = snprintf(message,sizeof(message),"Temperature:%3.3f,PH:%3.3f:",temperature,ph);
        printData(message, sizeof(message));
        //Encrypt the message
        aes.setup(key, AES::KEY_256, AES::MODE_CBC, iv);
        aes.encrypt(message, sizeof(message));
        aes.clear();
     
        //Print the encrypted message
        dprintf("Encrypted message:");
        //dprintf("%s", message);
        printData(message, sizeof(message));
        
        Send(message);
        myled = 0;
        wait_ms(900000);
    }
}

void SystemClock_Config(void)
{
#ifdef B_L072Z_LRWAN1_LORA
    /* 
     * The L072Z_LRWAN1_LORA clock setup is somewhat differnt from the Nucleo board.
     * It has no LSE (LSE can only work with External Crystal or oscillator)
     */
    RCC_ClkInitTypeDef RCC_ClkInitStruct = {0};
    RCC_OscInitTypeDef RCC_OscInitStruct = {0};

    /* Enable HSE Oscillator and Activate PLL with HSE as source */
    RCC_OscInitStruct.OscillatorType      = RCC_OSCILLATORTYPE_HSI;
    RCC_OscInitStruct.HSEState            = RCC_HSE_OFF;
    RCC_OscInitStruct.HSIState            = RCC_HSI_ON;
    RCC_OscInitStruct.HSICalibrationValue = RCC_HSICALIBRATION_DEFAULT;
    RCC_OscInitStruct.PLL.PLLState        = RCC_PLL_ON;
    RCC_OscInitStruct.PLL.PLLSource       = RCC_PLLSOURCE_HSI;
    RCC_OscInitStruct.PLL.PLLMUL          = RCC_PLLMUL_6;
    RCC_OscInitStruct.PLL.PLLDIV          = RCC_PLLDIV_3;

    if (HAL_RCC_OscConfig(&RCC_OscInitStruct) != HAL_OK) {
        // Error_Handler();
    }

    /* Set Voltage scale1 as MCU will run at 32MHz */
    __HAL_RCC_PWR_CLK_ENABLE();
    __HAL_PWR_VOLTAGESCALING_CONFIG(PWR_REGULATOR_VOLTAGE_SCALE1);

    /* Poll VOSF bit of in PWR_CSR. Wait until it is reset to 0 */
    while (__HAL_PWR_GET_FLAG(PWR_FLAG_VOS) != RESET) {};

    /* Select PLL as system clock source and configure the HCLK, PCLK1 and PCLK2
    clocks dividers */
    RCC_ClkInitStruct.ClockType = (RCC_CLOCKTYPE_SYSCLK | RCC_CLOCKTYPE_HCLK | RCC_CLOCKTYPE_PCLK1 | RCC_CLOCKTYPE_PCLK2);
    RCC_ClkInitStruct.SYSCLKSource = RCC_SYSCLKSOURCE_PLLCLK;
    RCC_ClkInitStruct.AHBCLKDivider = RCC_SYSCLK_DIV1;
    RCC_ClkInitStruct.APB1CLKDivider = RCC_HCLK_DIV1;
    RCC_ClkInitStruct.APB2CLKDivider = RCC_HCLK_DIV1;
    if (HAL_RCC_ClockConfig(&RCC_ClkInitStruct, FLASH_LATENCY_1) != HAL_OK) {
        // Error_Handler();
    }
#endif
}


void dump(const char *title, const void *data, int len, bool dwords)
{
    dprintf("dump(\"%s\", 0x%x, %d bytes)", title, data, len);

    int i, j, cnt;
    unsigned char *u;
    const int width = 16;
    const int seppos = 7;

    cnt = 0;
    u = (unsigned char *)data;
    while (len > 0) {
        ser->printf("%08x: ", (unsigned int)data + cnt);
        if (dwords) {
            unsigned int *ip = ( unsigned int *)u;
            ser->printf(" 0x%08x\r\n", *ip);
            u+= 4;
            len -= 4;
            cnt += 4;
            continue;
        }
        cnt += width;
        j = len < width ? len : width;
        for (i = 0; i < j; i++) {
            ser->printf("%2.2x ", *(u + i));
            if (i == seppos)
                ser->putc(' ');
        }
        ser->putc(' ');
        if (j < width) {
            i = width - j;
            if (i > seppos + 1)
                ser->putc(' ');
            while (i--) {
                printf("%s", "   ");
            }
        }
        for (i = 0; i < j; i++) {
            int c = *(u + i);
            if (c >= ' ' && c <= '~')
                ser->putc(c);
            else
                ser->putc('.');
            if (i == seppos)
                ser->putc(' ');
        }
        len -= width;
        u += width;
        ser->printf("\r\n");
    }
    ser->printf("--\r\n");
}

