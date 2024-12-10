<?php
$data1 = array(5, 8, 9, 15);
$data2 = array(3, 10, 8, 12);
$data3 = array_merge($data1, $data2);
print_r($data3);
//Array
//(
//    [0] => 5
//    [1] => 8
//    [2] => 9
//    [3] => 15
//    [4] => 3
//    [5] => 10
//    [6] => 8
//    [7] => 12
//)

echo "\n";

// 連想配列の場合
$data1 = array("apple" => 100, "orange" => 120);
$data2 = array("melon" => 500, "apple" => 200); // appleがダブってる
$data3 = array_merge($data1, $data2);
print_r($data3);
//Array
//(
//    [apple] => 200 // 100じゃなくて200に上書きされている
//    [orange] => 120
//    [melon] => 500
//)