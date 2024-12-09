<?php
$color1 = array("red", "yellow", "blue");
$count1 = count($color1);
echo $count1; // 3

echo "\n";

// 配列が入れ子になった場合も、配列がひとつの要素と見なされる
$color2 = array("red", "yellow", array("blue", "white"));
$count2 = count($color2);
echo $count2; // 3

echo "\n";

// 入れ子の配列もちゃんとカウントされる
$count3 = count($color2, COUNT_RECURSIVE);
echo $count3; // 5

