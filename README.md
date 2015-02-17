# instaperimeter
An ESP8266 / LUA / php based burglar alert.
I came up with this project when when shooting a video on installing the NODEMCU firmware on the ESP-1 module.
If I ever get to complete this project, the Idea is, that you can scatter around some battery operated sensors on your property.
Thus: InstaPerimeter

# What it does at the moment:
The lua Code checks the status of a PIR sensor (gpio2) connected to an esp-01 module every second. 
In case of a state change, it connects to web server, passing a sensor ID and status.

On the web server (a raspberry pi in this case) this information is written to a text file.

A browser can connect to the web server. A php-script reads the sensor's status from the file.

# Video tutorials
You will want to watch these two video tutorials:
- Lua on the ESP8266 Part 1: http://youtu.be/_GSYZ1e14nc
- Lua on the ESP8266 Part 2 "The Burglar Alarm": http://youtu.be/G4ArTQ_KWs4

Although you will notice that some improvements have been made to the code since the recordings.

I am not a programmer and the software may  have serious security flaws. If you want to contribute, you are welcome. Use the software with caution.

