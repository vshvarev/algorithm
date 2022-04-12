<?php

$array = [5, 1, 22, 25, 6, -1, 9, 10];
$sequence = [1, 6, -1, 10];

// first try, O(n) time | O(n) space

function isValidSubsequence($array, $sequence)
{
    $seqIndex = 0;
    foreach ($array as $number) {
        if ($number === $sequence[$seqIndex]) {
            $seqIndex++;
        }
    }
    return $seqIndex === count($sequence);
}

$result = isValidSubsequence($array, $sequence);
var_dump($result);
