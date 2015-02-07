<html>
 <head>
<meta http-equiv="refresh" content="5">
  <title>Alarm Status Overview</title>
 </head>
 <body>
 <?php
 echo '<p><h1>Alarm Status</h1></p>';

$handle = @fopen("logdir/logfile.txt", "r");
$buffer = fgets($handle, 20);
fclose($handle);
$buffer2 = explode(",",$buffer);
$sid=$buffer2[0];
$sta=$buffer2[1];

echo "<p>Sensor Nr. " . $sid . " has status " . $sta . "<p>";

 ?> 
 </body>
</html>
