# instaperimeter
An ESP8266 / LUA / php based burglar alert.
I came up with this idea when when shooting a video on installing the NODEMCU firmware on the ESP-1 module.

# What it does:
The lua Code checks the status of a PIR sensor (gpio0) every second
In case of a state change, it connects to web server, passing a sensor ID and status.

On the web server (a raspberry pi in this case) this information is written to a text file.

A browser can connect to the web server. The php-script reads the sensor status from the file.
This works for one sensor only at the moment. The second other one is just a mockup. The current code does not scale to accomodate for that.
