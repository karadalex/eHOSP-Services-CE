<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Hospital on the cloud</title>
	<?php
		include 'includes/html/head.html';
	?>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/sign.css">
</head>
<body>
	<div id="container">
		<?php
			include 'includes/html/header.html';
		?>

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
</body>
</html>
