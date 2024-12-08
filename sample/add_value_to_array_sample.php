<?php
$stack1 = array("いちご","りんご");
// array_pushだと複数追加できる
array_push($stack1,"ぶどう", "みかん");
print_r($stack1);
//Array
//(
//    [0] => いちご
//    [1] => りんご
//    [2] => ぶどう
//    [3] => みかん
//)

echo "\n";

$stack2 = array("いちご","りんご");
// この書き方だと1つしか追加はできない
$stack2[] = "ぶどう";
print_r($stack2);
//Array
//(
//    [0] => いちご
//    [1] => りんご
//    [2] => ぶどう
//)

echo "\n";

$stack3 = array("いちご","りんご");
$stack4 = array_merge($stack3, array("ぶどう"));
print_r($stack4);
//Array
//(
//    [0] => いちご
//    [1] => りんご
//    [2] => ぶどう
//)

// ただし元の配列には追加はされていないんだって
print_r($stack3);
//Array
//(
//    [0] => いちご
//    [1] => りんご
//)