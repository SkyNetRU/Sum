<?php

function sum ($a, $b) {
	$res = $a + $b;
	return 'Nick says summ is '.$res;
}

$a = 5;
$b = 2;
echo sum($a, $b);