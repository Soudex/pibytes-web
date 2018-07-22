#!/bin/sh

#echo $1
if [ "$1" = "1" ] 
then echo "1" > /sys/class/gpio/gpio2/value
elif [ "$1" = "0" ]
then echo "0" > /sys/class/gpio/gpio2/value
elif [ "$1" = "T" ]
	then
	if  [ $(cat /sys/class/gpio/gpio2/value) = "1" ]
	then echo "0" > /sys/class/gpio/gpio2/value
	else
	echo "1" > /sys/class/gpio/gpio2/value
	fi
fi
