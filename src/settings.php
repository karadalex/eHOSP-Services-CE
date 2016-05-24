
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Settings</title>
	<?php
		include 'core/init.php';
		include 'includes/php/head.php';
	?>

	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
</head>
<body>
	<div id="container">
		<?php
			include 'includes/html/header.html';
		?>
        <h1> Settings </h1>
        <p> Change the settings below to configure your application according to your
            system and needs
        </p>

		<div>
            <section>
                <form action="core/sysconfig/setup_config.php" method="post">
					<ul class="input-list style-1 clearfix">
						<li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Hostname (e.g. "localhost")</p>
							<input type="text" placeholder="Hostname" name="APP_HOSTNAME" value="127.0.0.1">
						</li>

                        <li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Administrator Username</p>
							<input type="text" placeholder="Username" name="APP_ADMIN_USERNAME" value="admin">
						</li>

						<li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Administrator Password</p>
							<input type="password" placeholder="Password" name="APP_ADMIN_PASSWORD" value="adminpsswd">
						</li>
                        <br>

						<li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Administrator Password Again</p>
							<input type="password" placeholder="Password" name="APP_ADMIN_PASSWORD_verification" value="adminpsswd">
						</li>
                        <br>

                        <li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Database Hostname (e.g. "localhost")</p>
							<input type="text" placeholder="Database Hostname" name="DB_HOSTNAME" value="127.0.0.1">
						</li>
                        <br>

                        <li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Database Listening Port (e.g. 3306)</p>
							<input type="text" placeholder="Database Port" name="DB_PORT" value="3306">
						</li>
                        <br>

                        <li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Database Root Username (e.g. "root")</p>
							<input type="text" placeholder="Database Root User" name="DB_ROOT_USERNAME" value="root">
						</li>
                        <br>

                        <li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Database Root Password</p>
							<input type="password" placeholder="Database Root Password" name="DB_ROOT_PASSWORD" value="rootpsswd">
						</li>
                        <br>

                        <li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Database Root Password Again</p>
							<input type="password" placeholder="Database Root Password" name="DB_ROOT_PASSWORD_verification" value="rootpsswd">
						</li>
                        <br>

						<li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Raspberry PI Hostname</p>
							<input type="text" placeholder="Hostname" name="RASPBERRYPI_HOSTNAME" value="192.168.1.2">
						</li>
                        <br>

						<li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Raspberry PI Listening Port (Default: 49153)</p>
							<input type="text" placeholder="Port" name="RASPBERRYPI_PORT" value="8080/hardware/src">
						</li>
                        <br>
					</ul>
					<input type="submit" value="Save Settings">
				</form>
        </div>
	</div>
	
	<?php include 'includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
