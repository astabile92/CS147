<!DOCTYPE html>
<html>
	<head>
		<title>Write Post</title>
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
	
	<div data-role="page" data-theme="e">

	<div data-role="header" data-theme="e" data-id="sameheader" data-position="fixed" data-tap-toggle="false">
		<h1>Write</h1>
	</div><!-- /header -->
		
	<div id="content" data-role="content">
		<p>Enter your post:</p>
		<form enctype="multipart/form-data" action="submit.php" method="POST" id="login">
			<input id="latitude" name="latitude" type="hidden" />
			<input id="longitude" name="longitude" type="hidden" />
			<input type="text" maxlength="1000" autocapitalize="on" name="message" id="message" value="" placeholder="Message"/>
			<input name="MAX_FILE_SIZE" value="1000000" type="hidden">
			<input id="image" name="image" type="file" />
			<input type="submit" value="Submit Post" />					
		</form>
		
	</div><!-- /content -->
	<div data-role="footer" data-theme="e" data-id="samefooter" class="nav" data-position="fixed" data-tap-toggle="false">
	<div data-role="navbar" class="nav" data-grid="a">
	<ul>
		<li><a href="read.php?sort=near&ascending=0" id="read" data-icon="search">Read</a></li>
		<li><a href="write.php" id="write" data-icon="plus" class="ui-btn-active ui-state-persist">Write</a></li>
	</ul>
	</div>
	</div><!-- /footer -->

	</div><!-- /page -->
	<script type="text/javascript">
		function getLocation()
		  {
		  if (navigator.geolocation)
		    {
		    navigator.geolocation.getCurrentPosition(showPosition);
		    }
		  else{$("#content").html("Unfortunately, you won't be able to post messages unless you have geolocation enabled. Please check your settings!");}
		  }
		function showPosition(position)
		  {
		  $("#latitude").val(position.coords.latitude);
		  $("#longitude").val(position.coords.longitude);
	         //console.log(position.coords.latitude);
		  //console.log(position.coords.longitude);	
	        }
		
		 getLocation();

	</script>
	</body>
</html>