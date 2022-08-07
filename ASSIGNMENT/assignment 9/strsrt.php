<?php
$no=$_POST["no"];
$array=explode(",",$no);
for($i=0;$i<count($array);$i++)
{
	echo"$array[$i]<br>";
}
sort($array);
echo"NEW SORT<br>";
for($i=0;$i<count($array);$i++)
{
	echo"$array[$i]<br>";
}
?>