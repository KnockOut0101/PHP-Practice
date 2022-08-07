<?php
$d=$_POST["day"];
$m=$_POST["month"];
$y=$_POST["year"];
$dd=$_POST["day1"];
$mm=$_POST["month1"];
$yy=$_POST["year1"];
$ddd=$d-$dd;
$mmm=$m-$mm;
$yyy=$y-$yy;
if($d<31 and $m=(4||6||9||8||11) and $y>$yy)
{	
	if($ddd<0)
	{
		abs($ddd);
		$mmm=$mmm-1;
	}
	if($mmm<0)
	{
		abs($mmm);
		$yyy=$yyy-1;
	}
	echo"$ddd days";
	echo"$mmm months";
	echo"$yyy years";		
}
else if($d<32 and $m=(1||3||5||7||10||12) and $y>$yy)
{	
	if($ddd<0)
	{
		abs($ddd);
		$mmm=$mmm-1;
	}
	if($mmm<0)
	{
		abs($mmm);
		$yyy=$yyy-1;
	}
	echo"$ddd days";
	echo"$mmm months";
	echo"$yyy years";		
}
if($d<30 and $m=2 and $y>$yy)
{	
	if($ddd<0)
	{
		abs($ddd);
		$mmm=$mmm-1;
	}
	if($mmm<0)
	{
		abs($mmm);
		$yyy=$yyy-1;
	}
	echo"$ddd days";
	echo"$mmm months";
	echo"$yyy years";		
}
?>