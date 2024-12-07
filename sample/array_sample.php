<?php
$array=array(1,2,3,4,5);
printf( "\$array[0]=%s\n", $array[0]); // $array[0]=1
printf( "\$array[1]=%s\n", $array[1]); // $array[1]=2
printf( "\$array[2]=%s\n", $array[2]); // $array[2]=3

echo "\n";

$array2=array('abc',1,2+3);
printf( "\$array2[0]=%s\n", $array2[0]); // $array2[0]=abc
printf( "\$array2[1]=%s\n", $array2[1]); // $array2[1]=1
printf( "\$array2[2]=%s\n", $array2[2]); // $array2[2]=5

echo "\n";

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

echo "\n";

// PHP5.4から、array()のほかに[]による配列の短縮構文が使える
$array4 = ['男', '21歳', '東京都'];
printf( "\$array4[0]=%s\n", $array4[0]); // $array4[0]=男
printf( "\$array4[1]=%s\n", $array4[1]); // $array4[1]=21歳
printf( "\$array4[2]=%s\n", $array4[2]); // $array4[2]=東京都

echo "\n";

$array5 = ['gender'=>'女', 'age'=>'22歳', 'address'=>'京都府'];
printf( "\$array5['gender']=%s\n", $array5['gender']); // $array5['gender']=女
printf( "\$array5['age']=%s\n", $array5['age']); // $array5['age']=22歳
printf( "\$array5['address']=%s\n", $array5['address']); // $array5['address']=京都府