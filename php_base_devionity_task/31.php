<form action="" method="get">
    <input type="email" name="email" placeholder="email"><br>
    <input type="text" name="username" placeholder="username"><br>
    <input type="text" name="message" placeholder="your message"><br>
    <input type="submit">

</form>
<?php
$res = serialize($_REQUEST);
echo $res;
?>