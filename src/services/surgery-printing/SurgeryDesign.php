<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Surgery Design</title>
	<?php
		include '../includes/html/head.html';
	?>
</head>
<body>
	<div id="container">
		<?php
			include '../includes/html/header.html';
		?>

		<div class="row">
	        <h1>Surgery Design</h1>
	        <p>
	        	Design a surgical procedure to be executed remotely with a surgical robotical
	        	mechanism
			</p>
			<div id="tasks">
				<a href="surgery_sample_tasks.php">
					<button type="button" class="services">
						Sample Tasks
					</button>
				</a>
				<a href="custom_surgery.php">
					<button type="button" class="services">
						Design your own Task
					</button>
				</a>
			</div>
      	</div>
	</div>

	<script src="../../js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
