<?php
function func() {
    return array("A", "B", "C"); // 配列を返す
}

list($x, $y, $z) = func(); // list関数で配列を受け取る
echo "x=$x, y=$y, z=$z\n"; // x=A, y=B, z=C