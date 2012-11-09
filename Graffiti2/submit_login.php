<?php
session_start();
include("config.php");

$_SESSION["username"] = $_POST['email'];
//$email = $_POST['email'];
//$password = $_POST['password'];
//$num = 1
//if($num==1){
// header("Location: write.php");
//}else{
//$newQuery = "SELECT * `c_cs147_astabile`.`users` (`email`, `password`) VALUES ('".$newUser."', '".$newPassword."');";
//$result = mysql_query($newQuery);
header("Location: read.php");
//}
?>

