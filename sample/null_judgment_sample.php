<?php

if ( !isset($var) && empty($var) ) {
    echo '$varは未定義またはNULLです。';
}

echo "\n";

$var1 = null;

if ( is_null($var1) ) {
    echo '$var1はNULLですよ。';
}

echo "\n";

$var2 = "";

if ( isset($var2) && empty($var2) ) {
    echo '$var2は定義済みですが、0、"0"、空文字、空配列、falseのいずれかです';
}

echo "\n";

$var3 = 12345;

if ( isset($var3) && !empty($var3) ) {
    echo '$var3は' .$var3. 'です。'; # $var3は12345です。
}
