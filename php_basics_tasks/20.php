<?php
/**
 * Created by PhpStorm.
 * User: SuperUser
 * Date: 09.04.2017
 * Time: 18:01
 */
$book1 = array('story', 'Gogol', 'Nose', 100);
$book2 = array('technical', 'Andy.Harris', 'Php$MySQl', 200);
$book3 = array('Dystopian', 'George Orwell', '1984', 150);

$list_book = array($book1, $book2, $book3);

echo '<pre>';
print_r($list_book);
echo '</pre>';