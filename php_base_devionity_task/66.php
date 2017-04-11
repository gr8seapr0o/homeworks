<?php
function func(array $a){
    echo '<pre>';
    print_r($a);
    echo '</pre>';

}

$arr = array(12, 'ff', 45);
func($arr);