<?php
declare(strict_types=1);

function findMin(float $a, float $b, float $c ) {
    if ($a < $b && $a < $c) {
        return $a;
    } elseif ($b < $a && $b < $c) {
        return $b;
    }
    return $c;
}

echo findMin(2.5, 2.3, 2.8);