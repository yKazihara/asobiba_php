<?php

$student = new Man();
$student->name = "鈴木";
$student->show(); // 鈴木

echo "\n";

$student->name = "田中";
$student->show(); // 田中

echo "\n";

echo MyMath::PI; // 3.14

echo "\n";

MyMath::$debug_level = 9;
echo MyMath::$debug_level; // 9

echo "\n";

echo MyMath::add(3, 5); // 8

class Man
{
    public $name;

    public function show()	{
        echo $this->name;
    }
}

class MyMath {
    const PI = 3.14;

    public static $debug_level = 0;

    public static function add($x, $y) {
        return $x + $y;
    }
}
