<?php
// 見つかった場合
$data1 = array(10, 5, 20, 8, 15);
$key1 = array_search(20, $data1);
echo $key1; // 0始まりの2番目、つまり3つ目

echo "\n";

// 見つからない場合はfalseがかえってくる
$data2 = array(10, 5, 20, 8, 15);
$key2 = array_search(30, $data2);
if ( $key2 === false ){
    echo "見つかりません"; // こっちに入る
} else {
    echo $key2;
}

echo "\n";

// 複数見つかった場合、最初に見つかった位置をかえす
$data3 = array(10, 5, 20, 8, 5);
$key3 = array_search(5, $data3);
echo $key3; // 1