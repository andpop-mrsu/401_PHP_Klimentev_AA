<?php

declare(strict_types=1);

namespace AlexeyKlimentev\Task03\Gcd;

function gcd(int $a, int $b): int
{
    $a = abs($a);
    $b = abs($b);

    while ($b !== 0) {
        [$a, $b] = [$b, $a % $b];
    }

    return $a;
}
