<?php


$arr = [

        'login' => 'admin',
        'password' => md5('123'),
        'user_id'=>'101'
];

session_start();

 if((!empty($_POST['login']) && !empty($_POST['password'])) && ($_POST['login'] == $arr['login'] &&  md5($_POST['password']) == $arr['password'])) {


        $_SESSION['user_id'] = $arr['user_id'];
     $_SESSION['auth'] = true;
     header("Location: profile.php");
              exit;
         }

elseif (empty($_POST['login']) || empty($_POST['password'])) {
    echo "Введите логин и пароль:";
    include "index.php";
}
 elseif(($_POST['login'] != $arr['login']) && ($_POST['password'] != $arr['password'])) {

     echo "Вы ввели не верный логин или пароль";
     include "index.php";
 }








