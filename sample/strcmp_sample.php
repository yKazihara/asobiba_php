<?php
if ( strcmp("1st", "1st") == 0 ) {
    echo "1stと1stは同じ文字列です\n";
} else {
    echo "1stと1stは異なる文字列です\n";
}

if ( strcmp("1st", "2nd") == 0 ) {
    echo "1stと2ndは同じ文字列です\n";
} else {
    echo "1stと2ndは異なる文字列です\n";
}

// これはやらないほうがいいよ。
// PHPでは「==」で比較する場合、文字列に数値形式のものが含まれていると文字列が数値に変換され、
// 数値として比較されるから
var_dump("1" == "01"); // 1 == 1 -> true
var_dump("10" == "1e1"); // 10 == 10 -> true
var_dump(100 == "1e2"); // 100 == 100 -> true