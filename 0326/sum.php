<?php
function Sum_Solution($n) 
{
	$r = 0;
	$n && ($r = Sum_Solution($n)+Sum_Solution($n-1));
	echo $r;
}
Sum_Solution(4);