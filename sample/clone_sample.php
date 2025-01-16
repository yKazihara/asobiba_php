<?php
class MyClass {
    public $name;
}

$obj1 = new MyClass();
$obj1->name = "AAA";

$obj2 = clone $obj1; // $obj1 とは別のオブジェクトが生成される
$obj2->name = "BBB";

echo $obj1->name . "\n"; // AAA と表示される
echo $obj2->name . "\n"; // BBB と表示される