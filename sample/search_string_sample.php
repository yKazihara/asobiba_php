<?php
// 検索する文字列が、検索対象の文字列の何文字目に存在するか（0始まりだから本当は5番目だけど4が返ってくる）
print strpos('test@domain.com', '@') . "\n"; // 4

// マッチした文字列より後ろの文字列を戻り値として返す
print strstr('test@domain.com', '@') . "\n"; // @domain.com

// マッチした文字列より前の部分を戻り値として返したい場合は、第３引数にTRUEを渡す
print strstr('test@domain.com', '@', TRUE) . "\n"; // test

// 検索対象文字列から正規表現にあてはまる文字列が存在するかチェックし、
// 戻り値はマッチした文字列がある場合は「1」、ない場合は「0」を返す
// 第３引数は省略が可能だが、指定した場合配列には正規表現にマッチした文字列が格納される
if ( preg_match('/[^@]+$/', 'name@example.com', $matches) ) {
    print $matches[0]; // example.com
}