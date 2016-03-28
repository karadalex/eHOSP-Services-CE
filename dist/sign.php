<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Hospital on the cloud</title>
	<?php
		include 'includes/html/head.html';
		include 'core/init.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/forms.css">
</head>
<body>
	<div id="container">
		<?php
			include 'includes/html/header.html';
		?>

		<div>
	        <h1> Sign in or Create an account</h1>

	        <section>
				<form action="core/methods/auth.php" method="post">
					<ul class="input-list style-1 clearfix">
						<li>
							<input type="text" placeholder="Username" name="username">
						</li>
						<li>
							<input type="password" placeholder="Password" name="password">
						</li>
					</ul>
					<input type="submit" value="Sign in">
				</form>

			</section>
			<p>Don't you have an account? Click <a href="register.php"> here</a> to register<p>

      	</div>
	</div>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
