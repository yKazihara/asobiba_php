<?php
// 要素を全部削除（恐ろしい）
$fruits1 = array("いちご", "りんご", "ぶどう");
unset($fruits1);

// warning出ますね。
var_dump($fruits1); // NULL

echo "\n";

$fruits2 = array("いちご", "りんご", "ぶどう");
unset($fruits2[1]); // "りんご"だけ削除

var_dump($fruits2);
//array(2) {
//  [0]=>
//  string(9) "いちご"
//  [2]=>
//  string(9) "ぶどう"
//}
// キーは歯抜けの状態・・・

$fruits2 = array_values($fruits2); // 詰める
var_dump($fruits2);
//array(2) {
//  [0]=>
//  string(9) "いちご"
//  [1]=>
//  string(9) "ぶどう"
//}

echo "\n";

$fruits3 = array("いちご", "りんご", "ぶどう", "ばなな");
array_splice($fruits3, 1);
var_dump($fruits3);
//array(1) {
//  [0]=>
//  string(9) "いちご"
//}
// いちごだけになっちゃった

$fruits4 = array("いちご", "りんご", "ぶどう", "ばなな");
array_splice($fruits4, 1, 2, "みるく");
var_dump($fruits4);
//array(3) {
//  [0]=>
//  string(9) "いちご"
//  [1]=>
//  string(9) "みるく"
//  [2]=>
//  string(9) "ばなな"
//}
// "りんご", "ぶどう" が、"みるく"に置きかわった

echo "\n";

$fruits5 = array("いちご", "りんご", "ぶどう", "ばなな");
array_shift($fruits5);
var_dump($fruits5);
//array(3) {
//  [0]=>
//  string(9) "りんご"
//  [1]=>
//  string(9) "ぶどう"
//  [2]=>
//  string(9) "ばなな"
//}
// 最初の要素が取り除かれる

echo "\n";

$fruits6 = array("いちご", "りんご", "ぶどう", "ばなな");
$banana = array_pop($fruits6);
var_dump($banana); // string(9) "ばなな" ← 最後の要素が抽出される