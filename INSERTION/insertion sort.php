<?php
$a=array(3,6,3,5,2,14,76,34,6,9,3);
/*for($i=0;$i<10;$i++)
{
	$b=$_POST["no"];
	array_push($a,(int)$b);
}*/
for($i=0;$i<count($a);$i++)
{
	echo"$a[$i]\n";
}
echo"<br>";
for($i=0;$i<count($a);$i++) 
{
    $k=$a[$i];
	$j=$i-1;
	while($j>=0 && $a[$j]>$val)
	{
		$a[$j+1]=$a[$j];
		$j--;
	}
	$a[$j+1]=$val;
}
for($i=0;$i<count($a);$i++)
{
	echo"$a[$i]\n";
}
?>