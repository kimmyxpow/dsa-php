<?php

// Binary Search is an efficient algorithm for finding an element in a sorted array. It divides the search range in half at each step.

function binarySearch(array $arr, $target)
{
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = intdiv($low + $high, 2);

        if ($arr[$mid] == $target) {
            return $mid; // Target found
        }
        if ($arr[$mid] < $target) {
            $low = $mid + 1; // Search in the right half
        } else {
            $high = $mid - 1; // Search in the left half
        }
    }
    return -1; // Target not found
}

// Example usage:
$arr = [1, 3, 5, 7, 9, 11];
$target = 7;
$result = binarySearch($arr, $target);
echo $result; // Output: 3 (index of 7)
