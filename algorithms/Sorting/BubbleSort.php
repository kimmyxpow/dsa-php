<?php

// Bubble Sort is a simple sorting algorithm that repeatedly steps through the list, compares adjacent elements, and swaps them if they are in the wrong order.

function bubbleSort(array $arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // Swap
                [$arr[$j], $arr[$j + 1]] = [$arr[$j + 1], $arr[$j]];
            }
        }
    }
    return $arr;
}

// Example usage:
$arr = [64, 34, 25, 12, 22, 11, 90];
$sortedArr = bubbleSort($arr);
print_r($sortedArr);
// Output: [11, 12, 22, 25, 34, 64, 90]
