<?php
$string = ' abc d e f ';
$trimed1 = trim($string);

// 文字列の前後の空白が除去されるが、文字列中の空白は除去されない
var_dump($trimed1); // string(9) "abc d e f"

// 左をトリム
var_dump(ltrim(' abc ')); // string(4) "abc "

// 右をトリム
var_dump(rtrim(' abc ')); // string(4) " abc"

// 文字列中も含めて空白を除去
$string = ' abc d e f ';
$trimed2 = str_replace(" ", "", $string);
var_dump($trimed2); // string(6) "abcdef"