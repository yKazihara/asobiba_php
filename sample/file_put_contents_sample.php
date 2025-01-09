<?php
$data = "Hello World!\n";
file_put_contents("./sample04.txt", $data);
// Hello World!

// 既存のファイルに追記する
file_put_contents("./sample04.txt", $data, FILE_APPEND);
//Hello World!
//Hello World!

$result = file_put_contents("sample05.txt", $data, LOCK_EX);
if ( $result === 0 ) {
    echo "書き込み失敗\n";
} else {
    echo "書き込み成功：" . $result . " Byte\n";
}
// 書き込み成功：13 Byte
// Hello World!