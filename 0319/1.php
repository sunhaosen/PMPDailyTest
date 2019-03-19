<?php
function calFn($n,$m)
{
	$sum = 0;
	for ($i=$n; $i <= $m; $i++) 
	{ 
		$data = substr_count($i,1);
		$sum += $data;
	}
	echo $sum;
}
calFn(1000,1300);