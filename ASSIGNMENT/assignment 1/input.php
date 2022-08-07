<?php
$n=$_POST["t1"];
$r=$_POST["t2"];
if($r=="SUMOFDIGIT")
{
	$sum=0;
	for($i=1;$i<=strlen($n);$i++)
	{
		$digit=$n%10;
		$next=$n/10;
		$sum=$sum+$digit;
	}
	echo"SUM<br>$sum";
}
else if($r=="PRIME")
{
	if(($n%2!=0)&&($n%3!=0)&&($n%5!=0)&&($n%7!=0))
	{
		$i=$n;
		for($j=2;$j<$n;$j++)
		{
			if(($i%$j)==0)
			{
				$m=$j;
				if($n%$m!=0)
				{
					echo"no. is prime";
				}
				else
				{
					echo"no. is not prime but semi-prime $n<br>";
					break;
				}
			}
			else if((($i%$j)!=0)&&(($j==$n-1)))
			{
				echo"no. is prime $n<br>";
				break;
			}
			
		}
	}
	else if(($n==2)||($n==3)||($n==5)||($n==7))
	{
		echo"no. is prime";
		echo"$n <br>";
	}
	else
	{
		echo"no. not prime";
		echo"$n <br>";
	}
}
else if($r=="REVERSE")
{
	$array=array();
	for($i=0;$i<=strlen($n);$i++)
	{
		$digit=$n%10;
		$next=$n/10;
		$add=array_push($array,$digit);
	}
	for($i=strlen($n)-1;$i<=0;$i--)
	{
		echo"reverse";
		echo"$array[$i]";
	}
}
else if($r=="FACT")
{  
	$num = $n;  
	$factorial = 1;  
	for ($x=$num; $x>=1; $x--)   
	{  
		$factorial = $factorial * $x;  
	}  
	echo "Factorial of $num is $factorial";
}	
echo "WELCOME";
?>