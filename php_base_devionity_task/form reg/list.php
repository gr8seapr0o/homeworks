<?php
$arr = file('user.txt');
echo "list of partisipants: <br>....................<br>";
foreach ($arr as $elem){
    $data = unserialize($elem);
    echo 'Name: ' . $data['name'] . '<br>';
    echo 'Email: ' . $data['email'] . '<br>';
    echo 'Phone: ' . $data['phone'] . '<br>';
    echo '--------------- <br>';
}