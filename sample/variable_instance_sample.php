<?php
class Sample1 {
    static public $var_class = 'クラス変数';
}

// クラス変数
echo "結果1: " . Sample1::$var_class . "\n"; // 結果1: クラス変数

// クラス変数の書き換え
Sample1::$var_class = '変数後のクラス変数';
echo "結果2: " . Sample1::$var_class . "\n"; // 結果2: 変数後のクラス変数

echo "\n";

class Sample2 {
    public $var_instance = 'インスタンス変数';
}

// インスタンス変数
$instance1 = new Sample2;
$instance2 = new Sample2;
echo "結果1: " . $instance1->var_instance . "\n"; // 結果1: インスタンス変数
echo "結果2: " . $instance2->var_instance . "\n"; // 結果2: インスタンス変数

// インスタンス変数の書き換え
$instance1->var_instance = '変更後のインスタンス変数';
echo "結果3: " . $instance1->var_instance . "\n"; // 結果3: 変更後のインスタンス変数
echo "結果4: " . $instance2->var_instance . "\n"; // 結果4: インスタンス変数