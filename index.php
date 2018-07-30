<?php

include_once 'src/sum.php';

use SkyNetRU\Sum;

$sum = new Sum();

$a = 5;
$b = 2;
echo $sum->sum($a, $b);