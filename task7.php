<?php
// 整数n が与えられたとき n の絶対値を出力せよ。
// [実行結果例]
// // n = 50 のとき
// 50
// // n = -21 のとき
// 21

$n = filter_input(INPUT_POST, 'n', FILTER_VALIDATE_INT);
$errors = array();

// var_dump ($n);

if ($n >= 0)
{
  echo "|n|=" . $n . "<br>";
}
else
{
  echo "|n|=" . -$n . "<br>";
}


?>

<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>絶対値</title>
  </head>
  <body>
    <p1>数字を入力してください</p1>
    <form action="" method="post">
      n: <input type="text" name="n">
      <input type="submit" value="送信">
    </form>
  </body>
  </html>