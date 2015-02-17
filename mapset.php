<html>
 <head>
  <title>Configure Sensor Map</title>
 </head>
 <body>


<script type="text/javascript" src="wz_dragdrop.js"></script>

<p><h1>Sensor Positions</h1></p>
 <form name="Sensors" action="store.php">
      <table>
        <tr>
          <td align="right">Sensor1: </td>
          <td align="right">&nbsp;&nbsp;x = </td>
          <td><input name="X1" type="text" size="12" id="X1"></td>
          <td align="right">&nbsp;&nbsp;y = </td>
          <td><input name="Y1" type="text" size="12" id="Y1"></td>
        </tr>
        <tr>
          <td align="right">Sensor2: </td>
          <td align="right">&nbsp;&nbsp;x = </td>
          <td><input name="X2" type="text" size="12" id="X2"></td>
          <td align="right">&nbsp;&nbsp;y = </td>
          <td><input name="Y2" type="text" size="12" id="Y2"></td>
        </tr>
        <tr>
          <td align="right">Sensor3: </td>
          <td align="right">&nbsp;&nbsp;x = </td>
          <td><input name="X3" type="text" size="12" id="X3"></td>
          <td align="right">&nbsp;&nbsp;y = </td>
          <td><input name="Y3" type="text" size="12" id="Y3"></td>
        </tr>
<tr>
      <td>
        <input type="submit" value="Save">
</td>
<td>
        <input type="reset" value="Reset">
      </td>
    </tr>
      </table>
  </form>

<?php

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

 echo "\n <div style=\"position: absolute; left: 0; top: 170;\">";
 echo "\n <img src=\"floorplan.jpg\" style=\"position: relative; top: 0; left: 0;\"/>";
 echo "\n <img name=\"sens1\" src=\"sens1.gif\" style=\"position: absolute; top: " . $YC1 . "px; left: " . $X1 . "px;\"/>";
 echo "\n <img name=\"sens2\" src=\"sens2.gif\" style=\"position: absolute; top: " . $YC2 . "px; left: " . $X2 . "px;\"/>";
 echo "\n <img name=\"sens3\" src=\"sens3.gif\" style=\"position: absolute; top: " . $YC3 . "px; left: " . $X3 . "px;\"/>";
echo "<script type=\"text/javascript\">";
echo "\n var elem = document.getElementById(\"X1\");";
echo "\n elem.value = " . $X1;
echo "\n var elem = document.getElementById(\"Y1\");";
echo "\n elem.value = " . $Y1;
echo "\n var elem = document.getElementById(\"X2\");";
echo "\n elem.value = " . $X2;
echo "\n var elem = document.getElementById(\"Y2\");";
echo "\n elem.value = " . $Y2;
echo "\n var elem = document.getElementById(\"X3\");";
echo "\n elem.value = " . $X3;
echo "\n var elem = document.getElementById(\"Y3\");";
echo "\n elem.value = " . $Y3;
echo "</script>";
 echo "\n </div>";
?>

<script type="text/javascript">
<!--
SET_DHTML(CURSOR_MOVE, TRANSPARENT, "sens1" , "sens2", "sens3");

// The following loop creates a copy for each of the two images,
// but hides that copy immediately while the page is still loading
for (var i = 0; i < 3; i++)
{
    dd.elements[i].copy();
    dd.elements[i].copies[0].hide();
}

// The following two functions override their empty namesakes predefined in wz_dragdrop.js.
// They are automatically invoked from wz_dragdrop.js when a drag operation starts
// and ends, respectively.

// Here we make the non-transparent 'placeholder' copy of the dragged image visible
// and move it to the place where the drag operation starts
function my_PickFunc()
{
    dd.obj.copies[0].moveTo(dd.obj.x, dd.obj.y);
    dd.obj.copies[0].show();
}

// Here we hide the 'placeholder' again
function my_DropFunc()
{
    dd.obj.copies[0].hide();

    // Write the name and coordinates of the dropped item into form inputs:
if (dd.obj.name == "sens1")
	{
   	 document.Sensors.X1.value = dd.obj.x;
  	 document.Sensors.Y1.value = dd.obj.y;
	}
if (dd.obj.name == "sens2")
	{
	document.Sensors.X2.value = dd.obj.x;
	document.Sensors.Y2.value = dd.obj.y;
	}
if (dd.obj.name == "sens3")
	{
	document.Sensors.X3.value = dd.obj.x;
	document.Sensors.Y3.value = dd.obj.y;
	}
}
//-->
</script>
 </body>
</html>
