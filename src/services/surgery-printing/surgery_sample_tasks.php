<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Surgery Design - Sample Tasks</title>
	<?php
		include '../includes/html/head.html';
	?>
	<link rel="stylesheet" type="text/css" href="../../css/blue-buttons-list.css">
</head>
<body>
	<div id="container">
		<?php
			include '../includes/html/header.html';
		?>

		<div class="row">
	        <h1>Surgery Design - Sample Tasks</h1>
	        <p>
	        	Click on one of the following buttons to execute a standard predefined surgical
                task.
			</p>
			<div id="buttons">
				<li>
					<button type="button" class="services" onclick="location.href='surgery_sample_tasks/robotic_arm_test';">
						Robotic Arm Test
					</button>
				</li>
				<li>
					<button type="button" class="services" onclick="location.href='surgery_sample_tasks/simple_incision_01';">
						Simple Incision 1
					</button>
				</li>
			</div>
      	</div>
	</div>

	<script src="../../js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
