<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Medical Diagnosis & Medical Database</title>
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
	        <h1>Medical Diagnosis & Medical Database</h1>
	        <p>
				Use the "Medical Diagnosis" service to diagnose accurately the disease or disorder of
				the patient and do the necessary steps to cure it.
			</p>
			<p>
				Use the "Medical Database" to find information about diseases, medication and other.
			</p>
			<ul>
	        	<li>
	        		<a href="diagnosis.php">
						<button type="button" class="services">
							Medical Diagnosis
						</button>
					</a>
	        	</li>
	        	<li>
	        		<a href="#">
						<button type="button" class="services">
							Medical Database
						</button>
					</a>
	        	</li>
				<li>
	        		<a href="links.php">
						<button type="button" class="services">
							Useful Links
						</button>
					</a>
	        	</li>
	        </ul>
    	</div>
	</div>

	<script src="../../js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
