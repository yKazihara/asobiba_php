<?php
$store = "A店";
if ( $store == "A店" ) {
    echo $store . "は東京にあります。\n";
} elseif ( $store == "B店" ) {
    echo $store . "は大阪にあります。\n";
} else {
    echo $store . "は存在しません。\n";
}
// A店は東京にあります。

echo "\n";

$store = "C店";
if ( $store == "A店" ) {
    echo $store . "は東京にあります。\n";
} elseif ( $store == "B店" ) {
    echo $store . "は大阪にあります。\n";
} else {
    echo $store . "は存在しません。\n";
}
// C店は存在しません。