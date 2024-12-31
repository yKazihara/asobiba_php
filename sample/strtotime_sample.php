<?php
// UNIXタイムスタンプ形式のint型
// 現在
echo strtotime("now");

echo "\n";

$now = strtotime("now"); // now は現在時刻を意味する
$tomorrow = strtotime("tomorrow"); // +1 day つまり明日を意味する

echo '現在時刻：'.date( 'Y年m月d日 H時i分s秒', $now )."\n";
// (例) 現在時刻：2024年12月31日 08時08分16秒 ← ロケールの考慮必要じゃね？
echo '明日の日付：'.date( 'Y年m月d日', $tomorrow );
// (例) 明日の日付：2025年01月01日

