<?php
$data1 = file_get_contents('./sample.json');
if ( $data1 === false ) {
    echo "読み込みに失敗しました。";
} else {
    echo $data1;
}
// {"name":"なまえ なまえ","gender":"男"}

echo "\n";

// ファイルの途中から読み込む
$data2 = file_get_contents('./sample.json', false, NULL, 7);
if ( $data2 === false ) {
    echo "読み込みに失敗しました。";
} else {
    echo $data2;
}
// :"なまえ なまえ","gender":"男"}