<?php

$student1 = new Man1();
$student1->show(); // 鈴木

echo "\n";

// コンストラクタに引数あり
$student2 = new Man2("渡辺");
$student2->show(); // 渡辺


class Man1
{
    protected $name;

    function __construct() {
        $this->name = "鈴木";
    }
    function show() {
        echo $this->name;
    }
}


class Man2
{
    protected  $name;

    function __construct($n) {
        $this->name = $n;
    }

    function show() {
        echo $this->name;
    }
}