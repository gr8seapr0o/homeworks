<?php
if(isset($_GET)){
    $str = serialize($_GET);
    $f = fopen('user.txt', 'a');
    fwrite($f, $str . PHP_EOL);
    fclose($f);
    include 'list.php';
}