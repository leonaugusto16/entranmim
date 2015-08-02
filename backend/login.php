<?php
session_start();

$login = $_POST['input-username'];
$password = $_POST['input-password'];

//Connect bank rs

$_SESSION['login'] = $login;
$_SESSION['password'] = $password;
header('location:../fluid.php');

?>
