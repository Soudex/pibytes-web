#!/bin/sh

G=$2

if [ "$1" = "1" ] 
then echo "1" > /sys/class/gpio/gpio$G/value
elif [ "$1" = "0" ]
then echo "0" > /sys/class/gpio/gpio$G/value
elif [ "$1" = "T" ]
	then
	if  [ $(cat /sys/class/gpio/gpio$G/value) = "1" ]
	then echo "0" > /sys/class/gpio/gpio$G/value
	else
	echo "1" > /sys/class/gpio/gpio$G/value
	fi
fi
