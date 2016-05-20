<?php
require_once 'core/init.php';
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - About</title>
	<?php
		include 'includes/html/head.html';
	?>
</head>
<body>
	<div id="container">
		<?php
			include 'includes/php/header.php';
		?>

		<div class="row">
	        <h1>About eHOSP</h1>
	        <p>
				Welcome to eHOSP, the hospital on the cloud,
				a platform for e-health and e-medicine!
			</p>
			<p>
				In its core, this platform is a hospital that
				runs in the Cloud and executes physical tasks with Robotics.
				<br>
				More specifically, the aim of this platform is to create a smart
				cross-platform Internet of Things designated to serve e-health and
				e-medicine applications as well as remote control of a 3D bioprinter-surgery
				robotic tool and also investigate how such a robotic platform can be designed
				and manufactured. Cross-platform refers to the ability of running the
				infrastructure in various operating systems, virtual machines, bare-metal
				servers and container ecosystems and also the ability to have access to
				these applications through any web browser, operating system, tablet or
				smartphone. E-health and e-medicine refer to applications on the Internet
				(cloud) to monitor a patient’s health and/or diagnose from his symptoms remotely
				with or without the presence of an actual doctor and also making medical research.
				Moreover, in this platform research was done about how robotic surgery procedures
				and 3D medical bioprinting can be performed simultaneously through the Internet
				and IoT infrastructure.
			</p>
      	</div>
	</div>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
