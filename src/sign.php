<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Hospital on the cloud</title>

	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/sign.css">

	<link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300' rel='stylesheet' type='text/css'>

    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.core.js"></script>
    <script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/jquery.effects.slide.js"></script>
</head>
<body>
	<div id="container">
		<div w3-include-HTML="includes/html/header.html"></div>
		<script src="js/w3-include-HTML.js"></script>

		<div>
	        <h1> Sign in or Create an account</h1>

	        <section>
				<ul class="input-list style-1 clearfix">
					<li>
						<input type="text" placeholder="Username">
					</li>
					<li>
						<input type="password" placeholder="Password">
					</li>
				</ul>
				<a href="services.php">
					<button type="button" class="services">
						Sign in
					</button>
				</a>
			</section>
			<p>Don't you have an account? Click <a href="register.php"> here</a> to register<p>

      	</div>
	</div>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>

    <script type="text/javascript" src="js/dynamic.js"></script>
</body>
</html>
