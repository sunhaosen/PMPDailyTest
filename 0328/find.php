<?php
$array = [1,2,3,4,5,6,7,8,9];
function FindNumbersWithSum($array,$sum)
{
	for ($i=0; $i < count($array); $i++) 
	{ 
		for ($j=0; $j < $i; $j++) 
		{ 
			if ($array[$i] + $array[$j] == $sum) 
			{
				$arr[] = $array[$i] * $array[$j];
				$arrs[] = $array[$i]."*".$array[$j]; 
			}
		}
	}
	asort($arr);
	foreach ($arr as $key => $value) 
	{
		$a[] = $arrs[$key];
	}
	echo reset($a)."=".reset($arr);
}
FindNumbersWithSum($array,8);