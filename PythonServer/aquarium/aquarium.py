import time


class Aquarium():


    def __init__(self):
        self.temperature = 0
        self.ph = 0
        self.light = 0
        self.food = 0

    def getTemperature(self):
        serial = open("/dev/ttyACM0", "rw")
        serial.write("1\n")
        time.sleep(2)
        line = serial.read(1)
        serial.close()
        self.temperature=line
        print(line)

