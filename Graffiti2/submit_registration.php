<?php
session_start();
include("config.php");

$newUser = $_POST['email'];
$newPassword = $_POST['password'];
$newQuery = "INSERT INTO `c_cs147_astabile`.`users` (`email`, `password`) VALUES ('".$newUser."', '".$newPassword."');";
$result = mysql_query($newQuery);
header("Location: read.php");
?>

