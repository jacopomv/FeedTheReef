# This file was automagically generated by mbed.org. For more information, 
# see http://mbed.org/handbook/Exporting-to-GCC-ARM-Embedded

###############################################################################
# Boiler-plate

# cross-platform directory manipulation
ifeq ($(shell echo $$OS),$$OS)
    MAKEDIR = if not exist "$(1)" mkdir "$(1)"
    RM = rmdir /S /Q "$(1)"
else
    MAKEDIR = '$(SHELL)' -c "mkdir -p \"$(1)\""
    RM = '$(SHELL)' -c "rm -rf \"$(1)\""
endif

OBJDIR := BUILD
# Move to the build directory
ifeq (,$(filter $(OBJDIR),$(notdir $(CURDIR))))
.SUFFIXES:
mkfile_path := $(abspath $(lastword $(MAKEFILE_LIST)))
MAKETARGET = '$(MAKE)' --no-print-directory -C $(OBJDIR) -f '$(mkfile_path)' \
		'SRCDIR=$(CURDIR)' $(MAKECMDGOALS)
.PHONY: $(OBJDIR) clean
all:
	+@$(call MAKEDIR,$(OBJDIR))
	+@$(MAKETARGET)
$(OBJDIR): all
Makefile : ;
% :: $(OBJDIR) ; :
clean :
	$(call RM,$(OBJDIR))

else

# trick rules into thinking we are in the root, when we are in the bulid dir
VPATH = ..

# Boiler-plate
###############################################################################
# Project settings

PROJECT := Lora_Transmitter


# Project settings
###############################################################################
# Objects and Paths

OBJECTS += AES/AES.o
OBJECTS += BufferedSerial/Buffer/MyBuffer.o
OBJECTS += BufferedSerial/BufferedSerial.o
OBJECTS += DS1820/DS1820.o
OBJECTS += DS1820/OneWire/OneWire.o
OBJECTS += SX1276GenericLib/radio/radio.o
OBJECTS += SX1276GenericLib/sx1276/sx1276-mbed-hal.o
OBJECTS += SX1276GenericLib/sx1276/sx1276.o
OBJECTS += Transmitter/Transmitter.o
OBJECTS += main.o

 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/PeripheralPins.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/analogin_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/analogin_device.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/analogout_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/analogout_device.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/can_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/flash_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/gpio_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/gpio_irq_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/gpio_irq_device.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/hal_tick_16b.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/hal_tick_32b.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/i2c_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/lp_ticker.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/mbed_board.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/mbed_overrides.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/mbed_retarget.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/mbed_sdk_boot.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/pinmap.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/port_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/pwmout_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/pwmout_device.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/rtc_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/serial_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/serial_device.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/sleep.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/spi_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/startup_stm32l072xx.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_adc.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_adc_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_comp.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_comp_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_cortex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_crc.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_crc_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_cryp.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_cryp_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_dac.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_dac_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_dma.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_firewall.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_flash.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_flash_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_flash_ramfunc.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_gpio.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_i2c.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_i2c_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_i2s.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_irda.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_iwdg.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_lcd.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_lptim.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_pcd.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_pcd_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_pwr.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_pwr_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_rcc.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_rcc_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_rng.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_rtc.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_rtc_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_smartcard.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_smartcard_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_smbus.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_spi.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_tim.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_tim_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_tsc.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_uart.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_uart_ex.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_usart.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_hal_wwdg.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_adc.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_comp.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_crc.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_crs.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_dac.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_dma.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_exti.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_gpio.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_i2c.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_lptim.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_lpuart.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_pwr.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_rcc.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_rng.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_rtc.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_spi.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_tim.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_usart.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm32l0xx_ll_utils.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/stm_spi_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/system_clock.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/system_stm32l0xx.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/trng_api.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/us_ticker_16b.o
 SYS_OBJECTS += mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/us_ticker_32b.o

INCLUDE_PATHS += -I../.
INCLUDE_PATHS += -I../AES
INCLUDE_PATHS += -I../BufferedSerial
INCLUDE_PATHS += -I../BufferedSerial/Buffer
INCLUDE_PATHS += -I../DS1820
INCLUDE_PATHS += -I../DS1820/OneWire
INCLUDE_PATHS += -I../SX1276GenericLib
INCLUDE_PATHS += -I../SX1276GenericLib/radio
INCLUDE_PATHS += -I../SX1276GenericLib/registers
INCLUDE_PATHS += -I../SX1276GenericLib/sx1276
INCLUDE_PATHS += -I../Transmitter
INCLUDE_PATHS += -I../mbed
INCLUDE_PATHS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1
INCLUDE_PATHS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1/TARGET_STM
INCLUDE_PATHS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1/TARGET_STM/TARGET_STM32L0
INCLUDE_PATHS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1/TARGET_STM/TARGET_STM32L0/TARGET_STM32L072xZ
INCLUDE_PATHS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1/TARGET_STM/TARGET_STM32L0/TARGET_STM32L072xZ/TARGET_DISCO_L072CZ_LRWAN1
INCLUDE_PATHS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1/TARGET_STM/TARGET_STM32L0/TARGET_STM32L072xZ/device
INCLUDE_PATHS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1/TARGET_STM/TARGET_STM32L0/device
INCLUDE_PATHS += -I../mbed/drivers
INCLUDE_PATHS += -I../mbed/hal
INCLUDE_PATHS += -I../mbed/platform

LIBRARY_PATHS := -L../mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM 
LIBRARIES := -lmbed 
LINKER_SCRIPT ?= ../mbed/TARGET_DISCO_L072CZ_LRWAN1/TOOLCHAIN_GCC_ARM/STM32L072XZ.ld

# Objects and Paths
###############################################################################
# Tools and Flags

AS      = arm-none-eabi-gcc
CC      = arm-none-eabi-gcc
CPP     = arm-none-eabi-g++
LD      = arm-none-eabi-gcc
ELF2BIN = arm-none-eabi-objcopy
PREPROC = arm-none-eabi-cpp -E -P -Wl,--gc-sections -Wl,--wrap,main -Wl,--wrap,_malloc_r -Wl,--wrap,_free_r -Wl,--wrap,_realloc_r -Wl,--wrap,_memalign_r -Wl,--wrap,_calloc_r -Wl,--wrap,exit -Wl,--wrap,atexit -Wl,-n -mcpu=cortex-m0plus -mthumb


C_FLAGS += -std=gnu99
C_FLAGS += -include
C_FLAGS += mbed_config.h
C_FLAGS += -DDEVICE_I2C=1
C_FLAGS += -D__MBED__=1
C_FLAGS += -DDEVICE_I2CSLAVE=1
C_FLAGS += -DTARGET_LIKE_MBED
C_FLAGS += -DDEVICE_PORTOUT=1
C_FLAGS += -DDEVICE_PORTINOUT=1
C_FLAGS += -D__MBED_CMSIS_RTOS_CM
C_FLAGS += -DDEVICE_LOWPOWERTIMER=1
C_FLAGS += -DDEVICE_RTC=1
C_FLAGS += -DDEVICE_SERIAL_ASYNCH=1
C_FLAGS += -D__CMSIS_RTOS
C_FLAGS += -DDEVICE_ANALOGOUT=1
C_FLAGS += -DTARGET_STM32L072CZ
C_FLAGS += -DTOOLCHAIN_GCC
C_FLAGS += -DDEVICE_I2C_ASYNCH=1
C_FLAGS += -DTARGET_CORTEX_M
C_FLAGS += -DTARGET_M0P
C_FLAGS += -DDEVICE_TRNG=1
C_FLAGS += -DTARGET_STM32L0
C_FLAGS += -DTARGET_STM32L072xx
C_FLAGS += -DDEVICE_SPI_ASYNCH=1
C_FLAGS += -DDEVICE_PWMOUT=1
C_FLAGS += -DDEVICE_INTERRUPTIN=1
C_FLAGS += -DTARGET_CORTEX
C_FLAGS += -DMBED_BUILD_TIMESTAMP=1547676067.23
C_FLAGS += -DTRANSACTION_QUEUE_SIZE_SPI=2
C_FLAGS += -D__CORTEX_M0PLUS
C_FLAGS += -DDEVICE_STDIO_MESSAGES=1
C_FLAGS += -DTARGET_FF_MORPHO
C_FLAGS += -DTARGET_FAMILY_STM32
C_FLAGS += -DTARGET_FF_ARDUINO
C_FLAGS += -DTARGET_RELEASE
C_FLAGS += -DTARGET_STM
C_FLAGS += -DDEVICE_SERIAL_FC=1
C_FLAGS += -DTARGET_DISCO_L072CZ_LRWAN1
C_FLAGS += -DARM_MATH_CM0PLUS
C_FLAGS += -DDEVICE_PORTIN=1
C_FLAGS += -DDEVICE_SLEEP=1
C_FLAGS += -DTOOLCHAIN_GCC_ARM
C_FLAGS += -DDEVICE_SPI=1
C_FLAGS += -DDEVICE_SPISLAVE=1
C_FLAGS += -DDEVICE_ANALOGIN=1
C_FLAGS += -DDEVICE_SERIAL=1
C_FLAGS += -DDEVICE_FLASH=1
C_FLAGS += -DTARGET_STM32L072xZ
C_FLAGS += -DTARGET_LIKE_CORTEX_M0
C_FLAGS += -include
C_FLAGS += mbed_config.h
C_FLAGS += -std=gnu99
C_FLAGS += -c
C_FLAGS += -Wall
C_FLAGS += -Wextra
C_FLAGS += -Wno-unused-parameter
C_FLAGS += -Wno-missing-field-initializers
C_FLAGS += -fmessage-length=0
C_FLAGS += -fno-exceptions
C_FLAGS += -fno-builtin
C_FLAGS += -ffunction-sections
C_FLAGS += -fdata-sections
C_FLAGS += -funsigned-char
C_FLAGS += -MMD
C_FLAGS += -fno-delete-null-pointer-checks
C_FLAGS += -fomit-frame-pointer
C_FLAGS += -Os
C_FLAGS += -g1
C_FLAGS += -mcpu=cortex-m0plus
C_FLAGS += -mthumb

CXX_FLAGS += -std=gnu++98
CXX_FLAGS += -fno-rtti
CXX_FLAGS += -Wvla
CXX_FLAGS += -include
CXX_FLAGS += mbed_config.h
CXX_FLAGS += -DDEVICE_I2C=1
CXX_FLAGS += -D__MBED__=1
CXX_FLAGS += -DDEVICE_I2CSLAVE=1
CXX_FLAGS += -DTARGET_LIKE_MBED
CXX_FLAGS += -DDEVICE_PORTOUT=1
CXX_FLAGS += -DDEVICE_PORTINOUT=1
CXX_FLAGS += -D__MBED_CMSIS_RTOS_CM
CXX_FLAGS += -DDEVICE_LOWPOWERTIMER=1
CXX_FLAGS += -DDEVICE_RTC=1
CXX_FLAGS += -DDEVICE_SERIAL_ASYNCH=1
CXX_FLAGS += -D__CMSIS_RTOS
CXX_FLAGS += -DDEVICE_ANALOGOUT=1
CXX_FLAGS += -DTARGET_STM32L072CZ
CXX_FLAGS += -DTOOLCHAIN_GCC
CXX_FLAGS += -DDEVICE_I2C_ASYNCH=1
CXX_FLAGS += -DTARGET_CORTEX_M
CXX_FLAGS += -DTARGET_M0P
CXX_FLAGS += -DDEVICE_TRNG=1
CXX_FLAGS += -DTARGET_STM32L0
CXX_FLAGS += -DTARGET_STM32L072xx
CXX_FLAGS += -DDEVICE_SPI_ASYNCH=1
CXX_FLAGS += -DDEVICE_PWMOUT=1
CXX_FLAGS += -DDEVICE_INTERRUPTIN=1
CXX_FLAGS += -DTARGET_CORTEX
CXX_FLAGS += -DMBED_BUILD_TIMESTAMP=1547676067.23
CXX_FLAGS += -DTRANSACTION_QUEUE_SIZE_SPI=2
CXX_FLAGS += -D__CORTEX_M0PLUS
CXX_FLAGS += -DDEVICE_STDIO_MESSAGES=1
CXX_FLAGS += -DTARGET_FF_MORPHO
CXX_FLAGS += -DTARGET_FAMILY_STM32
CXX_FLAGS += -DTARGET_FF_ARDUINO
CXX_FLAGS += -DTARGET_RELEASE
CXX_FLAGS += -DTARGET_STM
CXX_FLAGS += -DDEVICE_SERIAL_FC=1
CXX_FLAGS += -DTARGET_DISCO_L072CZ_LRWAN1
CXX_FLAGS += -DARM_MATH_CM0PLUS
CXX_FLAGS += -DDEVICE_PORTIN=1
CXX_FLAGS += -DDEVICE_SLEEP=1
CXX_FLAGS += -DTOOLCHAIN_GCC_ARM
CXX_FLAGS += -DDEVICE_SPI=1
CXX_FLAGS += -DDEVICE_SPISLAVE=1
CXX_FLAGS += -DDEVICE_ANALOGIN=1
CXX_FLAGS += -DDEVICE_SERIAL=1
CXX_FLAGS += -DDEVICE_FLASH=1
CXX_FLAGS += -DTARGET_STM32L072xZ
CXX_FLAGS += -DTARGET_LIKE_CORTEX_M0
CXX_FLAGS += -include
CXX_FLAGS += mbed_config.h
CXX_FLAGS += -std=gnu++98
CXX_FLAGS += -fno-rtti
CXX_FLAGS += -Wvla
CXX_FLAGS += -c
CXX_FLAGS += -Wall
CXX_FLAGS += -Wextra
CXX_FLAGS += -Wno-unused-parameter
CXX_FLAGS += -Wno-missing-field-initializers
CXX_FLAGS += -fmessage-length=0
CXX_FLAGS += -fno-exceptions
CXX_FLAGS += -fno-builtin
CXX_FLAGS += -ffunction-sections
CXX_FLAGS += -fdata-sections
CXX_FLAGS += -funsigned-char
CXX_FLAGS += -MMD
CXX_FLAGS += -fno-delete-null-pointer-checks
CXX_FLAGS += -fomit-frame-pointer
CXX_FLAGS += -Os
CXX_FLAGS += -g1
CXX_FLAGS += -mcpu=cortex-m0plus
CXX_FLAGS += -mthumb

ASM_FLAGS += -x
ASM_FLAGS += assembler-with-cpp
ASM_FLAGS += -D__CMSIS_RTOS
ASM_FLAGS += -D__MBED_CMSIS_RTOS_CM
ASM_FLAGS += -DTRANSACTION_QUEUE_SIZE_SPI=2
ASM_FLAGS += -D__CORTEX_M0PLUS
ASM_FLAGS += -DARM_MATH_CM0PLUS
ASM_FLAGS += -I../.
ASM_FLAGS += -I../AES
ASM_FLAGS += -I../BufferedSerial
ASM_FLAGS += -I../BufferedSerial/Buffer
ASM_FLAGS += -I../DS1820
ASM_FLAGS += -I../DS1820/OneWire
ASM_FLAGS += -I../SX1276GenericLib
ASM_FLAGS += -I../SX1276GenericLib/radio
ASM_FLAGS += -I../SX1276GenericLib/registers
ASM_FLAGS += -I../SX1276GenericLib/sx1276
ASM_FLAGS += -I../Transmitter
ASM_FLAGS += -I../mbed
ASM_FLAGS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1
ASM_FLAGS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1/TARGET_STM
ASM_FLAGS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1/TARGET_STM/TARGET_STM32L0
ASM_FLAGS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1/TARGET_STM/TARGET_STM32L0/TARGET_STM32L072xZ
ASM_FLAGS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1/TARGET_STM/TARGET_STM32L0/TARGET_STM32L072xZ/TARGET_DISCO_L072CZ_LRWAN1
ASM_FLAGS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1/TARGET_STM/TARGET_STM32L0/TARGET_STM32L072xZ/device
ASM_FLAGS += -I../mbed/TARGET_DISCO_L072CZ_LRWAN1/TARGET_STM/TARGET_STM32L0/device
ASM_FLAGS += -I../mbed/drivers
ASM_FLAGS += -I../mbed/hal
ASM_FLAGS += -I../mbed/platform
ASM_FLAGS += -include
ASM_FLAGS += /filer/workspace_data/exports/7/701a10e414d2f1cdfbd577ee8f7600f7/Lora_Transmitter/mbed_config.h
ASM_FLAGS += -x
ASM_FLAGS += assembler-with-cpp
ASM_FLAGS += -c
ASM_FLAGS += -Wall
ASM_FLAGS += -Wextra
ASM_FLAGS += -Wno-unused-parameter
ASM_FLAGS += -Wno-missing-field-initializers
ASM_FLAGS += -fmessage-length=0
ASM_FLAGS += -fno-exceptions
ASM_FLAGS += -fno-builtin
ASM_FLAGS += -ffunction-sections
ASM_FLAGS += -fdata-sections
ASM_FLAGS += -funsigned-char
ASM_FLAGS += -MMD
ASM_FLAGS += -fno-delete-null-pointer-checks
ASM_FLAGS += -fomit-frame-pointer
ASM_FLAGS += -Os
ASM_FLAGS += -g1
ASM_FLAGS += -mcpu=cortex-m0plus
ASM_FLAGS += -mthumb


LD_FLAGS :=-Wl,--gc-sections -Wl,--wrap,main -Wl,--wrap,_malloc_r -Wl,--wrap,_free_r -Wl,--wrap,_realloc_r -Wl,--wrap,_memalign_r -Wl,--wrap,_calloc_r -Wl,--wrap,exit -Wl,--wrap,atexit -Wl,-n -mcpu=cortex-m0plus -mthumb 
LD_SYS_LIBS :=-Wl,--start-group -lstdc++ -lsupc++ -lm -lc -lgcc -lnosys -lmbed -Wl,--end-group

# Tools and Flags
###############################################################################
# Rules

.PHONY: all lst size


all: $(PROJECT).bin $(PROJECT).hex size


.s.o:
	+@$(call MAKEDIR,$(dir $@))
	+@echo "Assemble: $(notdir $<)"
  
	@$(AS) -c $(ASM_FLAGS) -o $@ $<
  


.S.o:
	+@$(call MAKEDIR,$(dir $@))
	+@echo "Assemble: $(notdir $<)"
  
	@$(AS) -c $(ASM_FLAGS) -o $@ $<
  

.c.o:
	+@$(call MAKEDIR,$(dir $@))
	+@echo "Compile: $(notdir $<)"
	@$(CC) $(C_FLAGS) $(INCLUDE_PATHS) -o $@ $<

.cpp.o:
	+@$(call MAKEDIR,$(dir $@))
	+@echo "Compile: $(notdir $<)"
	@$(CPP) $(CXX_FLAGS) $(INCLUDE_PATHS) -o $@ $<


$(PROJECT).link_script.ld: $(LINKER_SCRIPT)
	@$(PREPROC) $< -o $@



$(PROJECT).elf: $(OBJECTS) $(SYS_OBJECTS) $(PROJECT).link_script.ld 
	+@echo "link: $(notdir $@)"
	@$(LD) $(LD_FLAGS) -T $(filter-out %.o, $^) $(LIBRARY_PATHS) --output $@ $(filter %.o, $^) $(LIBRARIES) $(LD_SYS_LIBS)


$(PROJECT).bin: $(PROJECT).elf
	$(ELF2BIN) -O binary $< $@
	+@echo "===== bin file ready to flash: $(OBJDIR)/$@ =====" 

$(PROJECT).hex: $(PROJECT).elf
	$(ELF2BIN) -O ihex $< $@


# Rules
###############################################################################
# Dependencies

DEPS = $(OBJECTS:.o=.d) $(SYS_OBJECTS:.o=.d)
-include $(DEPS)
endif

# Dependencies
###############################################################################
