<?php
// $arrayに文字列の分割結果を格納
$telephone = "090-1111-2222";
$array = explode("-", $telephone ,3 );

// $arrayの中身を出力
var_dump($array);
//array(3) {
//  [0]=>
//  string(3) "090"
//  [1]=>
//  string(4) "1111"
//  [2]=>
//  string(4) "2222"
//}

$address = array('東京都','新宿区','新宿','1-1-1','XXXビル');
// 配列を区切り文字（半角スペース）でつなげる
print ( implode(" ", $address )); // 東京都 新宿区 新宿 1-1-1 XXXビル
print ("\n");
// 配列を区切り文字無しでつなげる
print ( implode($address )); // 東京都新宿区新宿1-1-1XXXビル