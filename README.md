# instaperimeter
An ESP8266 / LUA / php based burglar alert.
I came up with this project when when shooting a video on installing the NODEMCU firmware on the ESP-1 module.
If I ever get to complete this project, the Idea is, that you can scatter around some battery operated sensors on your property.
Thus: InstaPerimeter

# What it does at the moment:
The lua Code checks the status of a PIR sensor (gpio2) of an esp-01 module every second
In case of a state change, it connects to web server, passing a sensor ID and status.

On the web server (a raspberry pi in this case) this information is written to a text file.

A browser can connect to the web server. The php-script (map.php) reads the sensor's status from the file.
This works for one sensor only at the moment. The second sensor on the map is just a mockup. The current code does not scale to accomodate for that.
