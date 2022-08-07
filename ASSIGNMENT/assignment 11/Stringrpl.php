<?php
$input=$_POST["input"];
$search=$_POST["search"];
$replace=$_POST["replace"];
//$break=explode(" ",$input);
if(strpos($input,$search)==false)
{
	echo"String doesn't exist";
}
else
{
	$pos1=strpos($input,$search);
	$output=substr_replace($input,$replace,$pos1);
	echo"OUTPUT $output<br>";
	echo"INPUT $input<br>";
	echo"STRING REPLACED $search<br>";
	echo"STRING REPLACED WITH $replace<br>";
}
?>