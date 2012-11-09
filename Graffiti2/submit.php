<?php
session_start();
include("config.php");

$message = $_POST['message'];
//$message = count($_FILES);
//$user = $_SESSION['username'];
$user = 'test@test.com';
$date = date('Y-m-d H:i:s', time());
$latitude = 1;//$_POST['latitude'];
$longitude = 1;//$_POST['longitude'];
$query = "INSERT INTO `c_cs147_astabile`.`messages` (`user`, `text`, `image`, `date`, `location`) VALUES ('".$user."', '".$message."', 0x0, '".$date."', GeomFromText('POINT(".$longitude." ".$latitude.")'));";
$result = mysql_query($query);
header("Location: read.php?sort=new&ascending=");
?> 