<?php
//現在の日付と時間
$d=date("Y-m-d H:i:s");
printf("現在、%s\n",$d); // 例：現在、2024-11-28 12:40:53

//明日、昨日、一週間後の日付を計算
$today=date("Y年m月d日");
$tomorrow=date("Y年m月d日",strtotime("1 day"));
$yesterday=date("Y年m月d日",strtotime("-1 day"));
$afterweek=date("Y年m月d日",strtotime("1 week"));
printf( "今日は%sです。\n", $today); /// 例：今日は2024年11月28日です。
printf( "明日は%sです。\n", $tomorrow); // 例：明日は2024年11月29日です。
printf( "昨日は%sです。\n", $yesterday); // 例：昨日は2024年11月27日です。
printf( "一週間後は%sです。\n", $afterweek); // 例：一週間後は2024年12月05日です。

//指定日の一ヶ月後の日付を計算
$anyday="2020-02-21";
$anyday_aftermonth=date("Y-m-d",strtotime('+1 month',strtotime($anyday)));
printf( "%sの一ヶ月後は、%sです。\n",$anyday, $anyday_aftermonth); // 例：2020-02-21の一ヶ月後は、2020-03-21です。
