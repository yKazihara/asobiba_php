<?php
$array1 = array();
var_dump($array1);
//array(0) {
//}

echo "\n";

$array2 = array('男', '21歳', '東京都');
var_dump($array2);
//array(3) {
//  [0]=>
//  string(3) "男"
//  [1]=>
//  string(5) "21歳"
//  [2]=>
//  string(9) "東京都"
//}

echo "\n";


$array3 = ['gender'=>'男', 'age'=>'21歳', 'address'=>'東京都'];
var_dump($array3);
//array(3) {
//  ["gender"]=>
//  string(3) "男"
//  ["age"]=>
//  string(5) "21歳"
//  ["address"]=>
//  string(9) "東京都"
//}