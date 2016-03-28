<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Hospital on the cloud</title>
	<?php
		include 'includes/html/head.html';
		include 'core/init.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div id="container">
		<?php
			include 'includes/html/header.html';
		?>

		<div>
	        <h1> Welcome to eHOSP</h1>
	        <p>
				Welcome to eHOSP, the hospital on the cloud,
				a platform for e-health and e-medicine!
			</p>
			<p>
				Click below to get started
			</p>
			<p>
				<a href="sign.php">
					<button type="button" class="services">
						Get Started
					</button>
				</a>
			</p>
    </div>
	</div>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
