<?php
$r=$_POST["input"];
$n=$_POST["t2"];
$name=array("php","java","c");
for($i=0;$i<count($name);$i++)
{
	echo"$name[$i]<br>";
}
if($n=="PUSH")
{
	array_push($name,$r);
}
else if($n=="POP")
{
	array_pop($name);
}
for($i=0;$i<count($name);$i++)
{
	echo"$name[$i]<br>";
}
?>