<?php
$arr = [
    4, 2, 5, 19, 13, 0, 10,
];
$e = 2;
  foreach ($arr as $elem) {
      if($elem == $e)
      {
          echo "Есть!";
      }
      else {
          echo "Нет!";
      }
  }