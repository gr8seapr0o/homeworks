<?php
$a = 20;
$b = 0;
$c = -20;
var_dump((bool)$a); // любое не нулевое число будет "true"

var_dump((bool)$b); // пустая строка, "0", NULL - "false"

var_dump((bool)$c); //любое не нулевое число будет "true"
