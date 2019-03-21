<?php

function ysfh($n,$m)
{
	$r = 0;
	for ($i=2; $i <= $n; $i++) 
	{ 
		$r = ($r+$m)%$i;
	}
	echo $r+1;
}
ysfh(6,2);