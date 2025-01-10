<?php
// 整数(int, integer)
$num = 1234;        // 10進整数
$num = -1234;       // 負の値
$num = 01234;       // 8進整数 (0で始まる数値は8進数とみなされる)
$num = 0xffff;      // 16進整数 (0xで始まる数値は16進数とみなされる)
$num = 0b11000100;  // 2進整数 (0bで始まる数値は2進数とみなされる)(PHP 5.4.0以降)

// 浮動小数点数(float, double, real)
$num = 1.234;     // 浮動小数点数
$num = 1.2e3;     // 浮動小数点数(指数表記) 1.2 × 103
$num = 7E-10;     // 浮動小数点数(指数表記) 7 × 10-10

// 論理型(bool, boolean) 大文字・小文字どちらでもいいの？！
$bool = true;
$bool = false;
$bool = TRUE;
$bool = True;

// 文字列(string)
$str1 = 'Hello';
$str2 = "Hello";
$str3 = 'He said: "I\'ll be back."';  // エスケープ
$str4 = "He said: \"I'll be back.\""; // エスケープ

$name = "Tanaka.";
echo "My name is $name\n";
echo "My name is {$name}\n";
// My name is Tanaka.

echo "\n";

// ヒアドキュメント(<<<)
echo <<<END_OF_TEXT
This is Japan.
This is America.
This is England.
END_OF_TEXT;
//This is Japan.
//This is America.
//This is England.

$name = "Tanaka";
echo <<<OWARI
He said "I'll be back.".
My name is $name.
OWARI;
//He said "I'll be back.".
//My name is Tanaka.

echo "\n";

// NULL型(null)
$var = null;

// 未定義値
$var = "AAA"; // 一度値が設定される
unset($var);  // $var の値が未定義状態になる

// NAN(not a number)
$num = acos(1.01);    // NAN を返す
if (is_nan($num)) {
    echo "Not a number\n";
}
// Not a number

echo "\n";

// キャスト
$a = 3.9;
$b = (integer)$a;            // 切り捨てされて整数の3に変換される
echo $b . "\n";              // 3 と表示される
echo gettype($b) . "\n";     // integer と表示される

echo "\n";

