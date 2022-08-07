<?php
$no=$_POST["no"];
$search=$_POST["search"];
$array=explode(",",$no);
for($i=0;$i<count($array);$i++)
{
	if($search==$array[$i])
	{
		$n=$array[$i];
		break;
	}	
}
if($n!=null && $n==int($search))
{
	echo"$n";
}
else
{
	echo"no. not found";
}
?>