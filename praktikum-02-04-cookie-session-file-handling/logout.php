<?php
session_start();
unset($_SESSION['username']);
echo header("location:login.php");
?>