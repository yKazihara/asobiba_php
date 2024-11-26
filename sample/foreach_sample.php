<?php
//$array[0]～$array[5]までループ
$array=array(0,1,2,3,4,5);
foreach( $array as $val ){
    print $val."\n";
}
//0
//1
//2
//3
//4
//5

//配列の書き換えができない
foreach( $array as $val ){
    $val=0;
}
var_dump($array);
//array(6) {
//    [0]=>
//  int(0)
//  [1]=>
//  int(1)
//  [2]=>
//  int(2)
//  [3]=>
//  int(3)
//  [4]=>
//  int(4)
//  [5]=>
//  int(5)
//}

//&をつけると、参照先の配列書き換えが可能
foreach( $array as &$val ){
    $val=0;
}
var_dump($array);
//array(6) {
//    [0]=>
//  int(0)
//  [1]=>
//  int(0)
//  [2]=>
//  int(0)
//  [3]=>
//  int(0)
//  [4]=>
//  int(0)
//  [5]=>
//  &int(0)
//}
