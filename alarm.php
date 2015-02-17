<?php

   echo "Hello there...\n";
   echo "Got status from sensor# ";
   echo $_REQUEST['SensorID'];
   echo "\n Getting status: ";
   echo $_REQUEST['status'];
   echo "\nBye...\n";

$sta = $_REQUEST ['status'];
$sid = $_REQUEST ['SensorID'];
$log = fopen("logdir/logfile.txt", "a") or die("Unable to open file!");
$current_time = date("Y-m-d")." ".date("H:i:s");
fwrite($log, $current_time . ",");
fwrite($log, $sid . ",");
fwrite($log, $sta . "\n");
fclose($log);
?>
