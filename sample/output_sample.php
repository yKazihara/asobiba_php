<?php
// 標準出力の書き出し(echo, print)
echo "Hello!\n"; //Hello!
echo '出身地:', '東京都'; // 出身地:東京都 2つでも出力される
echo "\n";

echo "-----\n";

print "Bye!\n"; // echoとちがって一つしか設定できない
//Bye!

echo "-----\n";

// フォーマット出力(printf)
$tm = localtime(time(), 1);
printf("%04d/%02d/%02d %02d:%02d:%02d",
    $tm["tm_year"] + 1900, $tm["tm_mon"] + 1, $tm["tm_mday"],
    $tm["tm_hour"], $tm["tm_min"], $tm["tm_sec"]);
echo "\n";
// 例：2025/01/17 02:22:22

echo "-----\n";

// デバッグ出力(print_r, var_dump)
$arr = array("red", "yellow", "blue");
print_r($arr);
var_dump($arr);
//Array
//(
//    [0] => red
//    [1] => yellow
//    [2] => blue
//)
//array(3) {
//  [0]=>
//  string(3) "red"
//  [1]=>
//  string(6) "yellow"
//  [2]=>
//  string(4) "blue"
//}