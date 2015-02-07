-- Send Alarm status to HomeServer
-- some code taken from ok1cdj
-- 2015 AReResearch (Andy Reischle)

SensorID = "1"
status = "CLEAR"
oldstatus = "CLEAR"



tmr.alarm(0, 1000, 1, function() -- Set alarm to one second
	if gpio.read(3)==1 then status="ALARM" else status="CLEAR" end
    if status ~= oldstatus then sendalarm (SensorID,status) end
	oldstatus = status
end)



function urlencode(str)
   if (str) then
      str = string.gsub (str, "\n", "\r\n")
      str = string.gsub (str, "([^%w ])",
         function (c) return string.format ("%%%02X", string.byte(c)) end)
      str = string.gsub (str, " ", "+")
   end
   return str    
end

function sendalarm(SensorID,status)
print("Open connection...")
conn=net.createConnection(net.TCP, 0) 
conn:on("receive", function(conn, payload) print(payload) end) 
conn:connect(80,'YOURSERVERS-IP') 
conn:send("GET /alarm.php?SensorID="..urlencode(SensorID).."&status="..urlencode(status).." HTTP/1.1\r\n") 
conn:send("Host: YOURVHOST.DOMAIN\r\n") 
conn:send("Accept: */*\r\n") 
conn:send("User-Agent: Mozilla/4.0 (compatible; esp8266 Lua; Windows NT 5.1)\r\n")
conn:send("\r\n")
conn:on("disconnection", function(conn)
     print("Disconnected...")
        end)
end
		