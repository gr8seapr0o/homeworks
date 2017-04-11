<?php

function test($x, $y)
{
    $rez = ($y == 0)? false : $x / $y;


return $rez;

}

echo test(1, 0) or die('Error');
echo 'Unreached line';