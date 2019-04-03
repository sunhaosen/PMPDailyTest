<?php
$arr=[1,2,3,4,5,6,7,8,9,10];
function zheban($arr,$n)
{
	$count = ceil(count($arr)/2);
	while (count($arr) > 1) 
	{
		if ($arr[$count] == $n) 
		{
			return $arr[$count];
		}
		if ($arr[$count] > $n) 
		{
			$end = $count - 1;
			
		}
		if ($arr[$cou] < $n) 
		{
			$start = $count + 1;
		}
	}
}
echo zheban($arr,2);