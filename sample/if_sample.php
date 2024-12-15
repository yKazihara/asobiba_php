<?php
$store = "A店";
if ( $store == "A店" ) {
    echo $store . "は東京にあります。\n";
}

// A店は東京にあります。

echo "\n";

if ( $store == "A店" || $store == "B店" ) {
    echo $store . "は日本にあります。\n"; // こちらが出力される
} else {
    echo $store . "は国外にあります。\n";
}

echo "\n";

