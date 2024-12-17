<?php
$product= "A製品";
switch ( $product ) {
    case "A製品":
        echo "関東工場に出荷です\n";
        break;
    case "B製品":
        echo "東北工場に出荷です\n";
        break;
    case "C製品":
        echo "関西工場に出荷です\n";
        break;
    case "D製品":
        echo "九州工場に出荷です\n";
        break;
}
// 関東工場に出荷です

echo "\n";

$product= "B製品";
switch ( $product ){
    case "A製品":
    case "B製品":
        echo "関東工場に出荷です\n";
        break;
    case "C製品":
        echo "関西工場に出荷です\n";
        break;
    case "D製品":
        echo "九州工場に出荷です\n";
        break;
}
// 関東工場に出荷です