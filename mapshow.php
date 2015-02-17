<html>
 <head>
<meta http-equiv="refresh" content="5">
  <title>Show Sensor Map</title>
 </head>
 <body>



<p><h1>Sensor stats</h1></p>

<?php

$sta1="CLEAR";
$sta2="CLEAR";
$sta3="CLEAR";


$log = file("logdir/logfile.txt");
$lines=count($log);
foreach($log as $buffer)
{
$buffer2 = explode(",",$buffer);
$tme=$buffer2[0];
$sid=$buffer2[1];
$sta=$buffer2[2];
${'sta' . $sid} = $sta;
}


if ($sta1 == "CLEAR\n") {
   $l1 = "green.png";
   }
   else {
   $l1 = "flasher1.gif";
   }

if ($sta2 == "CLEAR\n") {
   $l2 = "green.png";
   }
   else {
   $l2 = "flasher2.gif";
   }

if ($sta3 == "CLEAR\n") {
   $l3 = "green.png";
   }
   else {
   $l3 = "flasher3.gif";
   }

$handle = @fopen("logdir/setup.txt", "r");
$buffer = fgets($handle, 30);
fclose($handle);
$buffer2 = explode(",",$buffer);
$X1=$buffer2[0];
$Y1=$buffer2[1];
$X2=$buffer2[2];
$Y2=$buffer2[3];
$X3=$buffer2[4];
$Y3=$buffer2[5];

$YC1=$Y1-170;
$YC2=$Y2-170;
$YC3=$Y3-170;

 echo "\n <div style=\"position: absolute; left: 0; top: 70;\">";
 echo "\n <img src=\"floorplan.jpg\" style=\"position: relative; top: 0; left: 0;\"/>";
 echo "\n <img name=\"sens1\" src=\"" . $l1 . "\" style=\"position: absolute; top: " . $YC1 . "px; left: " . $X1 . "px;\"/>";
 echo "\n <img name=\"sens2\" src=\"" . $l2 . "\" style=\"position: absolute; top: " . $YC2 . "px; left: " . $X2 . "px;\"/>";
 echo "\n <img name=\"sens3\" src=\"" . $l3 . "\" style=\"position: absolute; top: " . $YC3 . "px; left: " . $X3 . "px;\"/>";
 echo "\n </div>";
?>

 </body>
</html>
