<?php
/*<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.</p>*/

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    foreach ($arr as $key=>$elem) {
        echo "{$key}<br>";
    }
foreach ($arr as $key=>$elem) {
    echo "{$elem}<br>";
}