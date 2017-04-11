<?php
//Создать функцию, которая принимает один аргумент в виде массива и дописывает в него последним элементом количество значений массива

function my_func(array $a)
{
    $count = count($a);
 array_push($a, $count);
 print_r($a);
}

$a = array('hi', 'all', '!!!');
my_func($a);