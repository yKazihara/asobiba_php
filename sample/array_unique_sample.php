<?php
$testArray1 = [
    'one' => 1,
    'two' => 1,
    'three' => 2,
    'four' => 1,
    'five' => 3,
];

print_r(array_unique($testArray1));
//Array
//(
//    [one] => 1
//    [three] => 2
//    [five] => 3
//)

echo "\n";

$testArray2 = [
    1,
    '1',
    2,
    1,
    '3',
];

print_r(array_unique($testArray2));
//Array
//(
//    [0] => 1
//    [2] => 2
//    [4] => 3
//)

echo "\n";

$testArray3 = [
    'one' => [
        'first' => 1,
        'second' => 2,
    ],
    'two' => [
        'first' => 1,
        'second' => 2,
    ],
    'three' => [
        'first' => 0,
        'second' => 2,
    ],
    'four' => [
        'first' => 1,
        'second' => 2,
    ],
];

print_r(array_unique($testArray3, SORT_REGULAR));
//Array
//(
//    [one] => Array
//        (
//            [first] => 1
//            [second] => 2
//        )
//
//    [three] => Array
//        (
//            [first] => 0
//            [second] => 2
//        )
//
//)