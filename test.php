<?php

function multipleTo2(int &$a, int &$b)
{
    $a *= 2;
    $b *= 2;
}

$x = 8;
$y = 55;

multipleTo2($x, $y);

echo $x . ' ' . $y;