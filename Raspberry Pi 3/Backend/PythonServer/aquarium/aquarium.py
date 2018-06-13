import serial
from subprocess import call


class Aquarium():


    def __init__(self):
        time=0.2
        baudRate = 9600
        self.device="/dev/ttyACM0"
        self.ser = serial.Serial(self.device, baudRate, timeout=time)
        self.temperature = 0
        self.ph = 0
        self.light = 0
        self.food = 0

    def getTemperature(self):
        self.ser.write("b".encode('utf-8'))
        out_temp = self.ser.read(30)
        print("Temperature Value returned:")
        return ("Temperature:").encode('utf-8') + out_temp

    def toggleLight(self):
        self.ser.write("c".encode('utf-8'))
        light=self.ser.read(2)
        print(light)
        if(light==('\n1'.encode('utf-8'))):
            lightRet="Light's on".encode('utf-8')
        else:
            lightRet="Light's off".encode('utf-8')
        return lightRet

    def feed(self):
        self.ser.write("a".encode('utf-8'))
        print("Feeded!")
        feeded=self.ser.read(40)
        return "Feeded".encode('utf-8')

    def getPHValue(self):
        self.ser.write("d".encode('utf-8'))
        out_ph = self.ser.read(30)
        print("PH Value returned")
        return ("PH:").encode('utf-8')+out_ph
