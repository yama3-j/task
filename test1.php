<?php

$s = string;
$n = num;
$m = mb_strlen($s);
$mx = $n - 1;
$my = mb_substr($s, $mx, 1);

if ($m >= $n) {
  echo $n . $my ;
}
else{
  echo $m . '以下の正の整数を入力してください';
}
