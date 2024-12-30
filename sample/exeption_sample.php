<?php

// 正常
echo division1(6,2);
// 3

echo "\n";

// PHP Fatal error:  Uncaught DivisionByZeroError: Division by zero
//echo division1(6,0);

echo "\n";

echo division2(6,0);
// ０では除算できません

echo "\n";

try {
    echo division3(6,0);
} catch (Exception $e){
    echo "エラー：" . $e->getMessage();
}
// エラー：０では除算できません




function division1($num1, $num2) {
    return $num1 / $num2;
}

function division2($num1,$num2) {
    if( $num2 == 0 ){
        return "０では除算できません";
    } else {
        return $num1 / $num2;
    }
}

function division3($num1,$num2) {
    if( $num2 == 0 ){
        throw new Exception("０では除算できません");
    }
    return $num1 / $num2;
}

