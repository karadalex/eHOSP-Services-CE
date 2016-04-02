<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Settings</title>
	<?php
		include '../../includes/html/head.html';
		include '../init.php';
	?>
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
    <link rel="stylesheet" type="text/css" href="../../css/forms.css">
</head>
<body>
	<div id="container">
		<?php
			include '../../includes/html/header.html';
		?>
        <h2> Settings </h2>
        <p> Change the settings below to configure your application according to your
            system and needs
        </p>

		<div>
            <section>
                <form action="setup_config.php" method="post">
					<ul class="input-list style-1 clearfix">
						<li>
                            <p>Hostname (e.g. "localhost")</p>
							<input type="text" placeholder="Hostname" name="hostname">
						</li>
                        <br>
                        <li>
                            <p>Administrator Username</p>
							<input type="text" placeholder="Username" name="username">
						</li>
                        <br>
                        <li>
                            <p>Database Hostname (e.g. "localhost")</p>
							<input type="text" placeholder="Database Hostname" name="db_hostname">
						</li>
                        <br>
                        <li>
                            <p>Database Listening Port (e.g. 3306)</p>
							<input type="number" placeholder="Database Port" name="db_port">
						</li>
                        <br>
                        <li>
                            <p>Database Root Username (e.g. "root")</p>
							<input type="text" placeholder="Database Root User" name="db_username">
						</li>
                        <br>
                        <li>
                            <p>Database Root Password</p>
							<input type="password" placeholder="Database Root Password" name="db_password">
						</li>
                        <br>
                        <li>
                            <p>Database Root Password Again</p>
							<input type="password" placeholder="Database Root Password" name="db_password_verification">
						</li>
                        <br>
						<li>
                            <p>Raspberry PI Hostname</p>
							<input type="text" placeholder="Hostname" name="rasp_hostname">
						</li>
                        <br>
						<li>
                            <p>Raspberry PI Listening Port</p>
							<input type="number" placeholder="Port" name="rasp_port">
						</li>
                        <br>
					</ul>
					<input type="submit" value="Save Settings">
				</form>
        </div>
	</div>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
