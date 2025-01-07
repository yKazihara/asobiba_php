<?php
$records = array(
    array(1,'りんご',100),
    array(2,'みかん',150),
    array(3,'いちご',300));

$fp = fopen('sample03.csv', 'w');

foreach($records as $record) {
    $line = implode(',' , $record);
    fwrite($fp, $line . "\n");
}
fclose($fp);
//1,りんご,100
//2,みかん,150
//3,いちご,300