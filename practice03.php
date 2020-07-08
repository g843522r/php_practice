<?php

/* 課題1
$name にあなたの名前を代入し、
if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」
と表示するように実装してください。
*/

$name = 'Nakajima';

if($name == 'Nakajima') {
  echo '私は'.$name.'です';
} else {
  echo '私の名前ではありません';


/* 課題2
for文を使って、1から10000までの合計の値を表示してください。
*/
$total = 0;

for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}

echo $total;


/* 課題3
$fruits に配列で好きなフルーツを5個代入し、
foreach文で順番に出力してください。
*/

$fruits = ['apple', 'banana', 'orage', 'blueberry', 'grape'];
foreach($fruits as $fruit) {
  echo $fruit;
}


/* 課題4
【応用】 次のプログラムのバグを修正し、
1から100までの間で5の倍数のみ表示するようにしてみてください。
*/

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}

/* 修正箇所メモ by Nakajima200704
最初のコメントアウトの「*」が抜けているので追加
終了条件を「<」→「<」=に修正
echoの箇所の「;」が抜けているので追加
*/

// 以上