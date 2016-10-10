<?php

 for ( $i = 1; $i<=100; $i++){
   if($i <= 1){
    continue;
  }
   if($i == 2) {
    echo $i . '<br>';
  }
    if($i == 3) {
    echo $i . '<br>';
  }
    if($i == 5) {
    echo $i . '<br>';
  }
    if($i == 7) {
    echo $i . '<br>';
  }
  if($i % 2 == 0){
    continue;
  }
  if($i % 3 == 0){
    continue;
  }
  if($i % 5 == 0){
    continue;
  }
  if($i % 7 == 0){
    continue;
  }
  if($i % 11 == 0){
    continue;
  }
  if($i % 13 == 0){
    continue;
  }
  echo $i. '<br>';
}
?>
