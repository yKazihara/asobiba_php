<?php
function calc($num1, $num2) {
    return $num1 * $num2;
}

echo "計算します\n";
echo calc(3,5). "\n";
echo "計算終了\n";
//計算します
//15
//計算終了

echo "-----\n";

func("AAA", "BBB", "CCC");
//0 : AAA
//1 : BBB
//2 : CCC
//AAA
//BBB
//CCC

// 引数の数が不定の関数だって！ func_num_args(), func_get_arg(), func_get_args()
function func() {
    for ($i = 0; $i < func_num_args(); $i++) {
        echo "$i : " . func_get_arg($i) . "\n";
    }

    foreach (func_get_args() as $arg) {
        echo "$arg\n";
    }
}

echo "-----\n";

function foo() { echo "foo\n"; }

$func = "foo";
$func(); // foo　関数foo()が呼ばれる

echo "-----\n";

# (1)関数名を指定するケース
function func01($n) {
    return $n * 2;
}
print_r(array_map("func01", array(1, 2, 3)));
//Array
//(
//    [0] => 2
//    [1] => 4
//    [2] => 6
//)

echo "-----\n";

# (2)無名関数を代入した変数を指定するケース
$func = function($n) {
    return $n * 2;
};
print_r(array_map($func, array(1, 2, 3)));
//Array
//(
//    [0] => 2
//    [1] => 4
//    [2] => 6
//)

echo "-----\n";

# (3)無名関数を直接指定するケース
print_r(array_map(function($n) {
    return $n * 2;
}, array(1, 2, 3)));
//Array
//(
//    [0] => 2
//    [1] => 4
//    [2] => 6
//)