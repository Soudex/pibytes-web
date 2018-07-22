#!/bin/sh

echo "2" > /sys/class/gpio/export
sleep 1s
echo "out" > /sys/class/gpio/gpio2/direction
echo "1" > /sys/class/gpio/gpio2/value

echo "3" > /sys/class/gpio/export
sleep 1s
echo "out" > /sys/class/gpio/gpio3/direction
echo "1" > /sys/class/gpio/gpio3/value

echo "14" > /sys/class/gpio/export
sleep 1s
echo "out" > /sys/class/gpio/gpio14/direction
echo "1" > /sys/class/gpio/gpio14/value

echo "17" > /sys/class/gpio/export
sleep 1s
echo "out" > /sys/class/gpio/gpio17/direction
echo "1" > /sys/class/gpio/gpio17/value

echo "27" > /sys/class/gpio/export
sleep 1s
echo "out" > /sys/class/gpio/gpio27/direction
echo "1" > /sys/class/gpio/gpio27/value

