<?php

   echo "Hello there...\n";
   echo "Got status from sensor# ";
   echo $_REQUEST['SensorID'];
   echo "\n Getting status: ";
   echo $_REQUEST['status'];
   echo "\nBye...\n";

$sta = $_REQUEST ['status'];
$sid = $_REQUEST ['SensorID'];
$log = fopen("logdir/logfile.txt", "w") or die("Unable to open file!");
fwrite($log, $sid . ",");
fwrite($log, $sta . "\n");
fclose($log);
?>
