<?php
echo "8 + 3 = ", 8 + 3, "\n"; // 8 + 3 = 11
echo "6 - 2 = ", 6 - 2, "\n"; // 6 - 2 = 4
echo "4 * 7 = ", 4 * 7, "\n"; // 4 * 7 = 28
echo "12 / 4 = ", 12 / 4, "\n"; // 12 / 4 = 3
echo "5 % 3 = ", 5 % 3, "\n"; // 5 % 3 = 2

echo "-----\n";

// 演算子の優先順位
echo "5 + 3 * 4 = ", 5 + 3 * 4, "\n"; // 5 + 3 * 4 = 17
echo "(5 + 3) * 4 = ", (5 + 3) * 4, "\n"; // (5 + 3) * 4 = 32

echo "-----\n";

// 演算の際の型変換
echo "5 + 2.4 = ", 5 + 2.4, "\n"; // 5 + 2.4 = 7.4
echo "5 + '8year' = ", 5 + '8year', "\n";
// PHP Warning:  A non-numeric value encountered が発生するが、
// 一応8として扱われ計算はされる　→　13
// echo "5 + '東京' = ", 5 + '東京', "\n";
// ↑これは完全にエラー　Fatal error: Uncaught TypeError: Unsupported operand types: int + string

