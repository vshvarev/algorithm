<?php

$array = [- 10, -7, -3, 1, 3, 5, 7];

// first try, O(n) time, O(n) space

function sortedSquaredArray($array)
{
    $length = count($array);
    $result = array_fill(0, $length, 0);
    $smallerValueIndex = 0;
    $largerValueIndex = $length - 1;
    for ($i = 0; $i < $length; $i++) {
        $smallerValue = $array[$smallerValueIndex];
        $largerValue = $array[$largerValueIndex];
        if (abs($smallerValue) >= abs($largerValue)) {
            $result[$length - $i - 1] = $smallerValue ** 2;
            $smallerValueIndex++;
        } else {
            $result[$length - $i - 1] = $largerValue ** 2;
            $largerValueIndex--;
        }
    }
    return $result;
}

$result1 = sortedSquaredArray($array);
print_r($result1);

//second try, O(n) time, O(n) space, look better

function sortedSquaredArray2($array)
{
    $length = count($array);
    $result = array_fill(0, $length, 0);
    $smallerValueIndex = 0;
    $largerValueIndex = $length - 1;
    for ($i = $length - 1; $i >= 0; $i--) {
        $smallerValue = $array[$smallerValueIndex];
        $largerValue = $array[$largerValueIndex];
        if (abs($smallerValue) >= abs($largerValue)) {
            $result[$i] = $smallerValue ** 2;
            $smallerValueIndex++;
        } else {
            $result[$i] = $largerValue ** 2;
            $largerValueIndex--;
        }
    }
    return $result;
}

$result2 = sortedSquaredArray2($array);
print_r($result2);