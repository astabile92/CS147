<!DOCTYPE html>
<html>
	<head>
		<title>Individual Post</title>
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
	
	<div data-role="page" data-theme="e" data-add-back-btn="true">
	<?php
		include("config.php");
		$id = $_GET["id"];
		$query = "SELECT * FROM messages WHERE id=".$id."";
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
		$db = $row["date"];
		$timestamp = strtotime($db);
		$date = date("m-d-Y", $timestamp);
	?>

	<div data-role="header" data-theme="e" data-id="sameheader" data-position="fixed" data-tap-toggle="false">
		<?php
			echo "<h1>Post from ".$date."</h1>";
		?>
	</div><!-- /header -->
		
	<div data-role="content">	
		<div class="image">
			[image goes here]
		</div>
	
		<?php
			echo "<p>".$row["text"]."</p>";
			echo "<p>score: ".$row["score"]."</p>";
		?>
		<p>xxx feet away</p>
	</div><!-- /content -->
	<div data-role="footer" data-theme="e" data-id="samefooter" class="nav" data-position="fixed" data-tap-toggle="false">
	<div data-role="navbar" class="nav" data-grid="a">
	<ul>
		<li><a href="read.php" id="read" data-icon="search" class="ui-btn-active ui-state-persist">Read</a></li>
		<li><a href="write.php" id="write" data-icon="plus" >Write</a></li>
	</ul>
	</div>	</div><!-- /page -->
	

	</body>
</html>