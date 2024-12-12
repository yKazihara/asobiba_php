<?php
$array1 = array('Jhon' => 23, 'Mike' => 31);
if ( array_key_exists('Mike', $array1) ) {
    echo "配列内にMikeというキーは存在します\n"; // こっちが表示される
} else {
    echo "配列内にMikeというキーは存在しません\n";
}

echo "\n";

$array2 = array('Jhon' => 23, 'Mike' => 31);
if ( isset($array2['Mike']) ) {
    echo "配列内にMikeというキーは存在し要素はNULLではありません\n"; // こっちが表示される
} else {
    echo "配列内にMikeというキーは存在しません\n";
}

echo "\n";

$array3 = array('Jhon' => 23, 'Mike' => NULL);
if ( isset($array3['Mike']) ) {
    echo "配列内にMikeというキーは存在し要素はNULLではありません\n";
} else {
    echo "配列内にMikeというキーは存在しないか、要素がNULLです\n"; // こっちが表示される
}