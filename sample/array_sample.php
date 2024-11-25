<?php
$array=array(1,2,3,4,5);
printf( "\$array[0]=%s\n", $array[0]); // $array[0]=1
printf( "\$array[1]=%s\n", $array[1]); // $array[1]=2
printf( "\$array[2]=%s\n", $array[2]); // $array[2]=3

$array2=array('abc',1,2+3);
printf( "\$array2[0]=%s\n", $array2[0]); // $array2[0]=abc
printf( "\$array2[1]=%s\n", $array2[1]); // $array2[1]=1
printf( "\$array2[2]=%s\n", $array2[2]); // $array2[2]=5

$array3=array('hello'=>'world', 'apple'=>'りんご', 'police'=>110);
printf( "\$array3['hello']=%s\n", $array3['hello']); // $array3['hello']=world
printf( "\$array3['apple']=%s\n", $array3['apple']); // $array3['apple']=りんご
printf( "\$array3['police']=%s\n", $array3['police']); // $array3['police']=110

$array3['test']="テスト";
var_dump($array3);
//array(4) {
//    ["hello"]=>
//  string(5) "world"
//    ["apple"]=>
//  string(9) "りんご"
//    ["police"]=>
//  int(110)
//  ["test"]=>
//  string(9) "テスト"
//}