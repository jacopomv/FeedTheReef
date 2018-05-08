# Feed The Reef

A project for automatically and remote feed your fishes, and as a further improvement all your animals.

# How does it work?
The project is conceptually dived into three parts:
* The high level that present the remote enviroment and premits to operate on it
* The middle layer that elaborate all information and take a decision in order to take care of your fishes
* The low level that collects all information retrived from sensors and execute the commands recived from the middle layer as for instance: (status of the enviroment, feed the fishes etc.).

## Implementation
### Hardware
At the hardware level, the project take advantage of two boards: Raspberry Pi 3, and Nucleo stm32.
### Software
For the software level:

* High level part:
  * Remote Control
    * Android Application
    * Ruby on rails API exposition
* Middle layer part:
  * Programming language:
    * Python language programming and Postgresql as DBMS on the Raspberry Pi 3
    * C code on the Nucleo stm32
* Low layer part:
  * Operating System:
    * Archlinux on the Raspberry Pi 3
    * Riot OS for the Nucleo stm32

# Goal of this project
The Goal of this project is to complete a pervasive system able to take care of your fishes when tou are not at home.
