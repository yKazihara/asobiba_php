<?php
// 変数($xxx)
$var = "Hello";
$Foo = "World";
$line_count = 123;
$名前 = "田中";      // 日本語も使用可能なの？！
echo $名前; # 田中って表示されるわ・・・。
#$365days = "";    // 先頭が数字なので使用できない

echo "\n";

// 変数の参照(&$xxx)
$foo = "AAA";           // 変数 $foo に "AAA" を代入する
$bar = &$foo;           // 変数 $foo への参照を $bar に代入する
$bar = "BBB";           // $bar を変更する (実体である $foo も変更される)
echo "$foo\n";          // BBB が出力される
echo "$bar\n";          // BBB が出力される

echo "\n";

// 可変変数($$xxx)
// 変数名を変数で表現することも可能??? なるほど。
$var1 = "AAA";
$var2 = "BBB";

$name = "var1";
echo $$name."\n";    // AAA が出力される

$name = "var2";
echo $$name."\n";    // BBB が出力される