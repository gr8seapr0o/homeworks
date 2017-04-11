<?php

function func(array $a, $b){


if($b == 1) {
    echo '<pre>';
    var_dump($a);
    echo '</pre>';
}
else {
    echo '<pre>';
    print_r($a);
    echo '</pre>';

}

}

$arr = array(12, 'ff', 45);
func($arr, 10);