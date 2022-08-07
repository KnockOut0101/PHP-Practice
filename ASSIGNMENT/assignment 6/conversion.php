<?php
$n=$_POST["n1"];
$m=$_POST["n2"];
$t=array("decimal","octal","binary","hexadecimal");
for($i=0;$i<4;$i++)
{
	if(($n=="$t[0]"))
	{	
		
		
		if(isset($_POST["$t[$i]"]))
		{
			$l=$_POST["$t[$i]"];
			switch("$t[$i]")
			{
				case"decimal":	echo "In decimal: " . base_convert($m,10,10);
								echo"<br>";
								break;
				case"octal":	echo "In octal: " . base_convert($m,10,8);
								echo"<br>";
								break;
				case"binary":	echo "In binary: " . base_convert($m,10,2);
								echo"<br>";
								break;
				case"hexadecimal":	echo "In hexadecimal: " . base_convert($m,10,16);
								echo"<br>";
								break;
			}
		}
		
		
	}
	if($n=="$t[1]")
	{	
		
		
		if(isset($_POST["$t[$i]"]))
		{
			$l=$_POST["$t[$i]"];
			switch("$t[$i]")
			{
				case"decimal":	echo "In decimal: " . base_convert($m,8,10);
								echo"<br>";
								break;
				case"octal":	echo "In octal: " . base_convert($m,8,8);
								echo"<br>";
								break;
				case"binary":	echo "In binary: " . base_convert($m,8,2);
								echo"<br>";
								break;
				case"hexadecimal":	echo "In hexadecimal: " . base_convert($m,8,16);
								echo"<br>";
								break;
			}
		}
		
		
	}
	if($n=="$t[2]")
	{	
		
		
		if(isset($_POST["$t[$i]"]))
		{
			$l=$_POST["$t[$i]"];
			switch("$t[$i]")
			{
				case"decimal":	echo "In decimal: " . base_convert($m,2,10);
								echo"<br>";
								break;
				case"octal":	echo "In octal: " . base_convert($m,2,8);
								echo"<br>";
								break;
				case"binary":	echo "In binary: " . base_convert($m,2,2);
								echo"<br>";
								break;
				case"hexadecimal":	echo "In hexadecimal: " . base_convert($m,2,16);
								echo"<br>";
								break;
			}
		}
		
		
	}
	if($n=="$t[3]")
	{	
		
		
		if(isset($_POST["$t[$i]"]))
		{
			$l=$_POST["$t[$i]"];
			switch("$t[$i]")
			{
				case"decimal":	echo "In decimal: " . base_convert($m,16,10);
								echo"<br>";
								break;
				case"octal":	echo "In octal: " . base_convert($m,16,8);
								echo"<br>";
								break;
				case"binary":	echo "In binary: " . base_convert($m,16,2);
								echo"<br>";
								break;
				case"hexadecimal":	echo "In hexadecimal: " . base_convert($m,16,16);
								echo"<br>";
								break;
			}
		}
		
		
	}
}
?>
