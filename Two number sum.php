<?php


$array = [7, 5, -4, 8, 11, 1, -2, -1];

$sum = 10;

// first try
// O(n^2) time | O(n) space

function twoNumberSum($array, $targetSum)
{
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        $firstNumber = $array[$i];
        for ($j = $i + 1; $j < $length; $j++) {
            $secondNumber = $array[$j];
            if ($firstNumber + $secondNumber === $targetSum) {
                return [$firstNumber, $secondNumber];
            }
        }
    }
    return [];
}

$result = twoNumberSum($array, $sum);
print_r($result);

//second try
// O(n) time | O(n) space


function twoNumberSum2($array, $targetSum)
{
    $nums = [];
    foreach ($array as $number) {
        $potentialMatch = $targetSum - $number;
        if (in_array($potentialMatch, $nums)) {
            return [$potentialMatch, $number];
        } else {
            $nums[] = $number;
        }
    }
    return [];
}

$result = twoNumberSum2($array, $sum);
print_r($result);