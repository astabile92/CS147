<?php
session_start();
include("config.php");

$username = mysql_real_escape_string($_POST['username']);
$password = md5(mysql_real_escape_string($_POST['password']));

if (!isset($username) || !isset($password) || empty($username) || empty($password)) {
	
	$_SESSION['error'] = "No information submitted!";
    header("Location: index.php");
    
} else {
	
    $result   = mysql_query("SELECT * FROM prelab WHERE username='$username' AND password='$password'");
    $numRows = mysql_num_rows($result);
    if ($numRows > 0) {
    	while ($row = mysql_fetch_assoc($result)) {
        	$_SESSION['id'] = $row['username'];
	    }
	    unset($_SESSION['error']);
	    $_SESSION['username'] = $username;
	    header("Location: okay.php");
    } else {
    	$_SESSION['error'] = "Sorry, that username/password combination was not found :(";
    	header("Location: index.php");
    }
}

?> 