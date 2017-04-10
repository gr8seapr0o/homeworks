<form action="" method="post">
    <input type="email" name="email" placeholder="email"><br>
    <input type="phone" name="phone" placeholder="380xxxxxxx"><br>
    <input type="text" name="name" placeholder="your name"><br>
    <input type="submit">

</form>
//через пост не работает
<?php
echo'<pre>';
print_r($_REQUEST);
echo'</pre>';
?>