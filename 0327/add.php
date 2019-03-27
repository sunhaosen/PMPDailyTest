<?php
function Add($n,$m)
{
	echo array_sum(explode(',', $n),explode(',', $m));
}
echo Add(3,7);