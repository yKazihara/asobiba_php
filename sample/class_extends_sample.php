<?php
class ParentClass
{
    function echoMessage()
    {
        echo "This is ParentClass";
    }
}

class ChildClass extends ParentClass
{
}

$child = new ChildClass();
$child->echoMessage(); // ChildClassにはない関数だけど、ParentClassにあるから実行できる
// This is ParentClass