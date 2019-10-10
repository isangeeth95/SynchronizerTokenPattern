<?php
session_start();
session_destroy();
unset($_SESSION['token']);
header('Location:login.php');
?>
