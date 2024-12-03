<?php
$str = "MovableType is written in PHP";
echo str_replace("MovableType", "WordPress", $str); // WordPress is written in PHP

$object_arr  = ["PHP", "Python", "Perl", "Prolog"];
$search_arr  = ["P", "o"];
$replace_arr = ["A", "B"]; // 「P」を「A」に「o」を「B」に置換
$result_arr  = str_replace($search_arr, $replace_arr, $object_arr);
print_r($result_arr);
//(
//    [0] => AHA
//    [1] => AythBn
//    [2] => Aerl
//    [3] => ArBlBg
//)