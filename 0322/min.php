<?php
$arr=array(3,32,321);
function fun($arr)
{
	for ($i=0; $i <= count($arr); $i++) 
	{ 
		for ($j=$i+1; $j <= count($arr); $j++) 
		{ 
			$a = intval($arr[$i].$arr[$j+1]);
			$b = intval($arr[$j+1].$arr[$i]);
			if ($a > $b) 
			{
				$tem = $arr[$i];
				$arr[$i] = $arr[$j+1];
				$arr[$j+1] = $tem;
			}
		}
	}
	echo implode('', $arr);
}
fun($arr);