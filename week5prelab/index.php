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
		
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
	
	<div data-role="page">

	<div data-role="header">
		<h1>Login Page</h1>
	</div><!-- /header -->

	<div data-role="content">	
	
		<?php
			if (isset($_SESSION['error'])) {
				echo "<p>".$_SESSION['error']."</p>";
				unset($_SESSION['error']);
			}
		?>
	
		<form action="submit.php" method="post" id="login">			
			<label for="username" class="ui-hidden-accessible">Username</label>
			<input type="text" autocapitalize="off" name="username" id="username" value="" placeholder="Username"/>
			
			<label for="password" class="ui-hidden-accessible">Password</label>
			<input type="password" name="password" id="password" value="" placeholder="Password"/>
														
			<input type="submit" value="Login" />					
			</form>	
	</div>
	</div><!-- /content -->
	</body>
</html>