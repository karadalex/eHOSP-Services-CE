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
	        <h1> Create an account</h1>

	        <section>
				<ul class="input-list style-1 clearfix">
					<li>
						<input type="text" placeholder="First Name">
					</li>
					<li>
						<input type="text" placeholder="Last Name">
					</li>
					<li>
						<input type="email" placeholder="Email">
					</li>
					<li>
						<input type="text" placeholder="Userame">
					</li>
					<li>
						<input type="password" placeholder="Password">
					</li>
                    <li>
						<input type="password" placeholder="Retype password">
					</li>
					<hr>
					<li>
						<select>
							<option value="null">Gender</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</li>
					<li>
						<select>
							<option value="null">User-type</option>
							<option value="male">Doctor</option>
							<option value="female">Patient</option>
						</select>
					</li>
					<li>
						<input type="text" placeholder="Age">
					</li>
					<li>
						<input type="text" placeholder="Birth Country">
					</li>
					<li>
						<input type="text" placeholder="Social Security Number">
					</li>

				</ul>

				<a href="">
					<button type="button" class="services">
						Register
					</button>
				</a>
			</section>

      	</div>
	</div>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>

    <script type="text/javascript" src="js/dynamic.js"></script>
</body>
</html>
