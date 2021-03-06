<?php
	header("Location: read.php?sort=near&ascending=0");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Homepage</title>
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
		<h1>Scratch</h1>
	</div><!-- /header -->
		
	<div id="home" data-role="content">
		<p>Hello!</p>
		<?php
			echo sys_get_temp_dir();
		?>
		<a href="read.php?sort=near&ascending=0">Browse posts</a>
		<p> or </p>
		<a href="write.php">Write a post</a>
	</div><!-- /content -->
	</div><!-- /page -->
	
	</body>
</html>