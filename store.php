<head>
<meta http-equiv="refresh" content="0; URL=mapset.php">
</head>

<?php

$X1 = $_REQUEST ['X1'];
$Y1 = $_REQUEST ['Y1'];
$X2 = $_REQUEST ['X2'];
$Y2 = $_REQUEST ['Y2'];
$X3 = $_REQUEST ['X3'];
$Y3 = $_REQUEST ['Y3'];

$cfg = fopen("logdir/setup.txt", "w") or die("Unable to open file!");
fwrite($cfg, $X1 . ",");
fwrite($cfg, $Y1 . ",");
fwrite($cfg, $X2 . ",");
fwrite($cfg, $Y2 . ",");
fwrite($cfg, $X3 . ",");
fwrite($cfg, $Y3 );
fclose($cfg);
?>
