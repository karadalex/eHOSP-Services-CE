"""
Load current configuration information and display it in the settings page
where it can be changed
"""

import sys

settings_page = open("../../settings.php", "w")

settings_page_content = '''
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Settings</title>
	<?php
		include 'core/init.php';
		include 'includes/html/head.html';
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
							<input type="text" placeholder="Hostname" name="APP_HOSTNAME" value="{}">
						</li>

                        <li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Administrator Username</p>
							<input type="text" placeholder="Username" name="APP_ADMIN_USERNAME" value="{}">
						</li>

						<li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Administrator Password</p>
							<input type="password" placeholder="Password" name="APP_ADMIN_PASSWORD" value="{}">
						</li>
                        <br>

						<li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Administrator Password Again</p>
							<input type="password" placeholder="Password" name="APP_ADMIN_PASSWORD_verification" value="{}">
						</li>
                        <br>

                        <li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Database Hostname (e.g. "localhost")</p>
							<input type="text" placeholder="Database Hostname" name="DB_HOSTNAME" value="{}">
						</li>
                        <br>

                        <li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Database Listening Port (e.g. 3306)</p>
							<input type="text" placeholder="Database Port" name="DB_PORT" value="{}">
						</li>
                        <br>

                        <li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Database Root Username (e.g. "root")</p>
							<input type="text" placeholder="Database Root User" name="DB_ROOT_USERNAME" value="{}">
						</li>
                        <br>

                        <li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Database Root Password</p>
							<input type="password" placeholder="Database Root Password" name="DB_ROOT_PASSWORD" value="{}">
						</li>
                        <br>

                        <li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Database Root Password Again</p>
							<input type="password" placeholder="Database Root Password" name="DB_ROOT_PASSWORD_verification" value="{}">
						</li>
                        <br>

						<li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Raspberry PI Hostname</p>
							<input type="text" placeholder="Hostname" name="RASPBERRYPI_HOSTNAME" value="{}">
						</li>
                        <br>

						<li class="List-Left-Aligned">
							<p class="Paragraph-Left-Aligned">Raspberry PI Listening Port (Default: 49153)</p>
							<input type="text" placeholder="Port" name="RASPBERRYPI_PORT" value="{}">
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
'''

settings_page_content = settings_page_content.format(
    sys.argv[1],
    sys.argv[2],
    sys.argv[3],
    sys.argv[4],
    sys.argv[5],
    sys.argv[6],
    sys.argv[7],
    sys.argv[8],
    sys.argv[9],
    sys.argv[10],
    sys.argv[11]
)

settings_page.write(settings_page_content)
settings_page.close()
