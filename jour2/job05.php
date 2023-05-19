<?php

$i = 2;
while ($i <= 1000) {
  $est_premier = true;
  $y = 2;
  while ($y < $i) {
    if ($i % $y == 0) {
      $est_premier = false;
      break;
    }
    $y++;
  }
  if ($est_premier) {
    echo "$i<br />";
  }
  $i++;
}




?>