<?php
function my_func()
{
    $str = '1' . PHP_EOL;
    $s = 22;
    for($i = 0; $i <= 8; $i++)
    {

        if($i > 0)
        {

            $s += 11;
            $str .= $s . PHP_EOL;
        }
        else
            {
                $str .= $s . PHP_EOL;
            }



    }
    return $str;
}


$f = fopen('test.txt', 'w');
fwrite($f, my_func());
fclose($f);
// check the file!
