<?php
$num = 0;
while ( $num < 5 ) {
    echo "$num";
    $num = $num + 1;
}
//01234

echo "\n";

$i = 0;
do {
    echo $i;
    $i += 1;
} while ($i <= 5);
// 012345

echo "\n";

$i = 0;
do {
    if ($i == 2){
        $i += 1;
        continue;
    } else if ($i == 4) {
        break;
    }
    echo $i;
    $i += 1;
} while ($i < 5);
// 013
// 0は出力される
// 1は出力される
// 2は出力されずcontinue
// 3は出力される
// 4は出力されずbreak