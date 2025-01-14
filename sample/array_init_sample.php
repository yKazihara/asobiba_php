<?php
$array1 = array();
var_dump($array1);
//array(0) {
//}

echo "-----\n";

$array2 = array('男', '21歳', '東京都');
echo $array2[0]."\n";    // 男
echo $array2[1]."\n";    // 21歳
echo $array2[2]."\n";    // 東京都
var_dump($array2);
//array(3) {
//  [0]=>
//  string(3) "男"
//  [1]=>
//  string(5) "21歳"
//  [2]=>
//  string(9) "東京都"
//}

echo "-----\n";

$array3 = ['gender'=>'男', 'age'=>'21歳', 'address'=>'東京都'];
echo $array3['gender']."\n"; // 男
echo $array3['age']."\n"; // 21歳
echo $array3['address']."\n"; // 東京都
var_dump($array3);
//array(3) {
//  ["gender"]=>
//  string(3) "男"
//  ["age"]=>
//  string(5) "21歳"
//  ["address"]=>
//  string(9) "東京都"
//}

echo "-----\n";

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $value[$i][$j] = $i * 100 + $j;
    }
}
echo $value[5][3] . "\n"; // 503

echo "-----\n";

$box = array(
    'name' => 'SampleBox',
    'size' => array(
        'height' => 300,
        'width' => 400,
    )
);
echo $box['size']['height'] . "\n"; // 300