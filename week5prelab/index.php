<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Login Page</title>
		<link rel="apple-touch-icon" href="appicon.png" />
		<link rel="apple-touch-startup-image" href="startup.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
	
		<?php
			if (isset($_SESSION['error'])) {
				echo "<p>".$_SESSION['error']."</p>";
				unset($_SESSION['error']);
			}
		?>
	
		<form action="submit.php" method="post" id="login">			
			<h2><span>Login:</span></h2>
			<label>Username
			<input class="forminput" type="text" id="username" name="username" autocapitalize="off" />
			</label>
								
			<label>Password
			<input class="forminput" type="password" id="password" name="password" />
			</label>
														
			<input type="submit" value="Login" />					
			</form>	
	</body>
</html>