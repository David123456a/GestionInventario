<?php
session_start();

session_unset();
session_destroy();

//unset($_COOKIE['usuarioCookie']);



header("location: login2.php");

exit();


?>