<?php
$num = 5;

function func() {
    global $num; // もしglobalをつけないと関数内のlocal変数として扱われる
    $num = 10;
}

func();
echo $num; // 5ではなく関数内で宣言されたglobalが適用されるので10
