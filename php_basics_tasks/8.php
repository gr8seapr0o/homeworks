<?php
$age = 'hi';
if($age > 18 && $age < 59)
{
    echo 'Вам еще работать и работать';
}
elseif($age > 59){
    echo 'Вам пора на пенсию';
}
elseif($age < 18 && $age > 0 ){
    echo 'Вам еще рано работат';
}
elseif($age < 0 || $age = NAN)
{
    echo "Неизвестный возраст";
}