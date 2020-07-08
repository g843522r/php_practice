<?php
echo 'hello php!';

// 課題1
$a = 3;
$b = 7;
echo $a + $b;

// 課題2
$array_month = ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月'];
echo $array_month[7];

// 課題3(200708修正)
$hello = "Hello, ";
$name = "Nakajima";
$world = "'s World!";
echo '/課題3の答え(修正)'.$hello.$name.$world.'/';

// 課題4(200708修正)
$tech_boost = 'tech ';
$tech_boost .= 'boost';
echo '/課題4の答え(修正)'.$tech_boost.'/';

// 課題5
// 変数名,クォーテンション等を修正
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018["December"];