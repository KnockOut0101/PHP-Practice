<?php
$n=$_POST["string"];
$l=strlen($n);
$m=explode(" ",$n);
$o=explode("\n",$n);
$count1=0;
$count2=0;
for($i=0;$i<count($m);$i++)
{
		$count1++;
}
for($i=0;$i<count($o);$i++)
{
		if($i==(count($o)-1))
		{
			$count2++;
			$count1--;
		}
		else
		{
			$count1++;
			$count2++;
		}
}
echo"$l characters <br>";
echo"$count1 words <br>";
echo"$count2 sentences <br>";
?>

