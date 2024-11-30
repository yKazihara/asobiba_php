<?php
// 文字列を連結
$str1 = "ika";
$str2 = "tako";
echo $str1 . $str2 . "\n"; // ikatako

// 数値を混ぜても自動的に文字列に変換し連結
echo $str1 . 10 . $str2 . 8 . "\n"; // ika10tako8

// 変数に文字列を連結
$str = "ika";
$str .= "tako";
$str .= "\n";
echo $str; // ikatako
