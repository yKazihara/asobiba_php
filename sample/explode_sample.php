<?php
$str1 = "a,b,c,d,e";
$explode_str_arr1 = explode(",", $str1); // 第3引数が省略されているので最後まで分割される
print_r($explode_str_arr1);

// Array
//(
//    [0] => a
//    [1] => b
//    [2] => c
//    [3] => d
//    [4] => e
//)

$str2 = "a,b,c,d,e";
$explode_str_arr2 = explode(",", $str2, 3); // 第3引数が指定されているので分割されるのは3つ目まで
print_r($explode_str_arr2);

// Array
//(
//    [0] => a
//    [1] => b
//    [2] => c,d,e
//)