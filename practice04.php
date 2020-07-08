<?php

/*
〜課題1〜
引数に数値を指定して実行すると、
数値を2倍にして返す関数を作成してください
*/

function two_times($number) {
  $result1 = 0;
  $result1 = $number * 2;
  return $result1;
}

$number = 6;
echo '課題1の結果は'.two_times($number).'です。';



/*
〜課題2〜
$a と $b を仮引数に持ち、
$a と $b　を足した結果を返す関数を作成してください。
*/
function sumation($a, $b) {
  $result2 = $a + $b;
  return $result2;
}

$a = 4;
$b = 5;
echo '課題2の結果は'.sumation($a, $b).'です。';

/*
〜課題3〜
$arr という配列の仮引数を持ち、
数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成してください。
*/
function multiplication($arr) {
  $result3 = array_product($arr);
  return $result3;
}

$arr = array(1, 3, 5, 7, 9);
echo '課題3の結果は'.multiplication($arr).'です。';


/*
〜課題4〜
【応用】次のプログラムは、
配列の中で1番大きい値を返す max_array という関数を
実装しようとしています。途中の部分を完成させてください。

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
*/

// foreach文ではなくmax関数にて最大値を取得する
function max_array($arr) {
  $result4 = max($arr);
  return $result4;
}

$arr = array(1,2,3,4,5,6,7);
echo '課題4の結果は'.max_array($arr).'です。';


/*
〜課題5〜
次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
・strip_tags
・array_push
・array_merge
・time, mktime
・date
*/


//・strip_tags関数
//文字列からHTMLおよびPHPタグを取り除く関数。
//php.netでは「XSS攻撃を防ぐ目的でこの関数を使うべきではない」、
//「htmlspecialchars()等を使うべき」とあるので留意。
$text = '<p>これはテスト文章です。</p>';
echo strip_tags($text, '<p>'); //$textに対して<p>タグを許可する

//・array_push関数
//配列に1つ以上の要素を最後に追加する関数
//追加する要素が1つだけなら「配列名[ ]」でよい。
$fruits = array("apple", "orage");
array_push($fruits, "banana", "blueberry");
print_r($fruits);


//・array_merge関数
//配列を同士を結合する。
//インデックスが振り直されることと、
//連想配列で重複するキーがあれば上書きされることに留意。
$language_1 = array('English', 'Spanish', 'French');
$language_2 = array('Chinese', 'Japanese', 'Korean');

print_r(array_merge($language_1, $language_2));


//・time関数
//現在のUnixタイムスタンプを返す関数
//このタイムスタンプは、
//Unix epoch(1970年1月1日00:00:00 GMT)から
//指定された時刻までの通算秒を表す長整数。
echo 'time関数の結果は'.time().'です。';


//・mktime関数
//日付をUnixのタイムスタンプとして取得する関数
echo 'mktime関数の結果は'.mktime().'です。';

//・date関数
//ローカルの日付/時刻を書式化する関数
echo 'date関数の結果は'.date("Y-m-d H:i:s").'です。';

?>