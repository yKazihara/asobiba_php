<?php

$student = new Man();
$student->name = "鈴木";
$student->show(); // 鈴木

echo "\n";

$student->name = "田中";
$student->show(); // 田中


class Man
{
    public $name;

    public function show()	{
        echo $this->name;
    }
}