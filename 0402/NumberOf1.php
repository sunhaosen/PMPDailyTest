<?php
function NumberOf1($a)
{
	$r=0;
	while ($a/=2) 
	{
		
		if ($a%2 != 0) 
		{
			$r++;
		}
		if ($a<2) 
		{
			return $r;
		}
	}
	// echo $r;
}
echo NumberOf1(10);