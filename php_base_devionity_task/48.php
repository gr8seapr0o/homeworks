<?php
//Создать алгоритм определения всех простых чисел в промежутке от 1 до 100 при помощи while
$i = 2;
$j = 2;
$arr = array();
while($i <= 100){
    while ($j < $i){
        if($i % $j == 0){
          break;
        }
        else{
            $arr[]=$i;
            break ;
        }

    }
    $i++;
}
var_dump($arr);
