<?php
class f
{
	static function fbnq($n)
	{
		$arr = [];
		for ($i=0; $i < $n; $i++) 
		{ 
			if (count($arr) < 2) 
			{
				$arr[] = 1;
			}
			else
			{
				$arr[] = $arr[$i - 1] + $arr[$i - 2];
			}
		}
		print_r($arr);
	}
	static function fbnq2($n)
	{
		if ($n == 1 || $n == 2) 
		{
			return 1;
		}
		else
		{
			return self::fbnq2($n - 1) + self::fbnq2($n - 2);
		}
	}
}
$n = 10;
echo f::fbnq($n)."<hr/>";
for ($i = 1;$i <= $n;$i++)
{
	echo f::fbnq2($i)."<br/>";
}