<?php
echo substr( "orange", 2 ); // ange
echo "\n";

// マイナス値だと末尾から取ってくれるのね
echo substr( "orange", -2 ); // ge
echo "\n";

echo substr( "orange", -10 ); // orange
echo "\n";

echo substr( "orange", 2 , 2 ); // an
echo "\n";

echo substr( "orange", -3 ,-1 ); // ng
echo "\n";

// 指定した開始位置が対象文字列の文字数を超えていたり、文字列を取得できなかった場合は false を返す
echo substr( "orange", 6); // false
echo "\n";

echo substr( "orange", 4, -4); // false

echo "-----\n";

echo mb_substr('グレープフルーツ', 0, 4, "UTF-8");
// 実行結果: グレープ
echo "\n";

echo mb_substr('グレープフルーツ', 4, 6, "UTF-8");
// 実行結果: フルーツ
echo "\n";

echo mb_substr('グレープフルーツ', -4, 4, "UTF-8");
// 実行結果: フルーツ
echo "\n";

echo mb_substr('orange', 0, 2, "UTF-8");
// 実行結果: or
echo "\n";