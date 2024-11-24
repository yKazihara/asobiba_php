<?php
$a="Hello";
$b="world";

$c=$a.$b;

// printfは、フォーマット文字列（第一引数）に従って、数値、文字列、変数を表示する関数
printf("%s+%s=%s\n", $a, $b, $c); // Hello+world=Helloworld

// sprintfは第一引数のフォーマット文字列に、変数や値を当てはめる関数
$d=sprintf("%s, %s", $a, $b);
printf("%s\n", $d); // Hello, world

// nl2brは文字列中の\n（改行）を<br />に変更する関数
$e=nl2br( sprintf("%s\n",$d) );
printf("%s\n",$e); // Hello, world<br />

