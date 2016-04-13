<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Surgery Design - Sample Tasks</title>
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
	        <h1>Surgery Design - Sample Tasks</h1>
	        <p>
	        	Click on one of the following buttons to execute a standard predefined surgical
                task.
			</p>
			<div id="tasks">
				<a href="surgery_sample_tasks/simple_incision_01">
					<button type="button" class="services">
						Simple Incision 1
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
