<?php

$json = '{
    "name": "テスト テスト",
    "gender": "男"
}';

$decoded_json = json_decode($json);
var_dump($decoded_json);
//object(stdClass)#1 (2) {
//  ["name"]=>
//  string(19) "テスト テスト"
//  ["gender"]=>
//  string(3) "男"
//}

echo "\n-----\n";

$obj = '{ "name": "なまえ なまえ",  "gender": "男"}';
$data = json_decode($obj,true);

$json = fopen('sample.json', 'w+b');
fwrite($json, json_encode($data,JSON_UNESCAPED_UNICODE));
fclose($json);
// sample.json -> {"name":"なまえ なまえ","gender":"男"}