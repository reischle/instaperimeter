<html>
 <head>
<meta http-equiv="refresh" content="5">
  <title>Alarm Status Overview</title>
 </head>
 <body>
 <?php
 echo '<p><h1>Alert Status</h1></p>';

$handle = @fopen("logdir/logfile.txt", "r");
$buffer = fgets($handle, 20);
fclose($handle);
$buffer2 = explode(",",$buffer);
$sid=$buffer2[0];
$sta=$buffer2[1];

if ($sta == "CLEAR\n") {
   $l1 = "green.png";
   }
   else {
   $l1 = "redlight.gif";
   }

echo "<p>Sensor Nr. " . $sid . " has status " . $sta . "<br>";
echo "Sensor Nr. 2 has status CLEAR (Just a dummy)</p>";

 echo "\n <div style=\"position: relative; left: 0; top: 0;\">";
 echo "\n <img src=\"floorplan.jpg\" style=\"position: relative; top: 0; left: 0;\"/>";
 echo "\n <img src=\"". $l1 ."\" style=\"position: absolute; top: 350px; left: 300px;\"/>";
 echo "\n <img src=\"green.png\" style=\"position: absolute; top: 90px; left: 310px;\"/>";
 echo "\n </div>";
?>
 </body>
</html>
