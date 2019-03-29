<?php
$str='aasvsddffg';
function FirstNotRepeatingChar($str)
{
	if (strlen($str) >= 0 && strlen($str) <= 10000) 
	{
		for ($i=0; $i < strlen($str); $i++) 
		{ 
			$r = substr_count($str, $str[$i]);
			if ($r < 2) 
			{
				return $i+1;
			}
		}
		echo "-1";
	}
}
echo FirstNotRepeatingChar($str);