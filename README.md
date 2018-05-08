# Feed The Reef

A project for automatically and remote feed your fishes, and as a further improvement all kind of pets.

# How does it work?
The project is conceptually divided into three parts:
* The high level that presents the remote environment and permits to operate on it
* The middle layer that elaborates all information and decides in order to take care of your fishes
* The low level that collects all information retrived from sensors and executes the commands received from the middle layer (e.g. status of the enviroment, feed the fishes etc.).

## Implementation
### Hardware
At the hardware level, the project takes advantage of two boards: Raspberry Pi 3, and Nucleo STM32-F401.
### Software
For the software level:

* High level part:
  * Remote Control
    * Android Application
    * Middle layer software on the Raspberry Pi 3 (Not decide yet)
* Middle layer part:
  * Programming language:
    * Python and Postgresql as DBMS on the Raspberry Pi 3
    * C on the Nucleo STM32
* Low layer part:
  * Operating System:
    * Arch linux on the Raspberry Pi 3
    * Riot OS for the Nucleo STM32

# Goal of this project
The Goal of this project is to realise a pervasive system able to take care of your fishes when you are abroad.
