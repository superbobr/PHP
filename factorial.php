<?php
function getFactorial(int $number)
{
    if ($number == 0 || $number == 1) return 1;
    else return $number * getFactorial($number - 1);
}

echo getFactorial(8);