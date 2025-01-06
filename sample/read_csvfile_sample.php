<?php
$lines = file('sample01.csv');
var_dump($lines);
// array(3) {
//  [0]=>
//  string(16) "1,りんご,100
//"
//  [1]=>
//  string(16) "2,みかん,150
//"
//  [2]=>
//  string(15) "3,いちご,200"
//}

echo "\n";

// $line に一行ずつ入る
foreach($lines as $line) {
    // カンマで分割
    $data = explode(',',$line);
    echo ' No.',$data[0];
    echo ' 商品名：',$data[1];
    echo ' 単価：',$data[2];
}
// No.1 商品名：りんご 単価：100
// No.2 商品名：みかん 単価：150
// No.3 商品名：いちご 単価：200

echo "\n----- csvファイルにダブルクォーテーションが含まれていた場合 -----\n";

$fp = fopen('sample02.csv', 'r');
while (($data = fgetcsv($fp)) !== FALSE) {
    echo ' No.',$data[0];
    echo ' 商品名：',$data[1];
    echo ' 単価：',$data[2];
    echo "\n";
}
fclose($fp);
// No.1 商品名：りんご 単価：100
// No.2 商品名：みかん 単価：150
// No.3 商品名：いちご 単価：200