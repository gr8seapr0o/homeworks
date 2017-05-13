<?php
session_start();
//if(isset($_POST['logout']) && $_POST['logout'] == 1) session_destroy();
if (isset($_POST['logout']) && $_POST['logout'] == 1) unset($_SESSION['auth']);
header("Location: Auth.php");
exit();