wifi.setmode(wifi.STATION)
wifi.sta.config("YOUR-SSID","YOUR-PASSWORD")
print(wifi.sta.getip())

