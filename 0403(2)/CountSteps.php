<?php
function CountSteps($n,$m)
{
	if ($n == 0 && $m ==0) 
	{
		return 0;
	}
	else if ($n == 0 || $m==0) 
	{
		return 1;
	}
	else
	{
		return CountSteps($n-1,$m) + CountSteps($n,$m-1);
	}
}
echo CountSteps(2,2);