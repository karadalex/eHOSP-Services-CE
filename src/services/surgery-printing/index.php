<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Remote Surgery & 3D Bioprinting</title>
	<?php
		include '../includes/html/head.html';
		$config = include('../../config.php');
	?>
</head>
<body>
	<div id="container">
		<?php
			include '../includes/html/header.html';
		?>

		<div class="row">
	        <h1>Remote Surgery & 3D Bioprinting</h1>
	        <p>
				Use this service to design surgery procedures which
				use robotic surgery and 3D bioprinting in parallel.
			</p>
			<div id="buttons">
				<ul>
		        	<li>
		        		<a href="SurgeryDesign.php">
							<button type="button" class="services">
								Surgery Procedure Design
							</button>
						</a>
		        	</li>
		        	<li>
		        		<a href="3DBioprintDesign.php">
							<button type="button" class="services">
								3D Bioprinting Design
							</button>
						</a>
		        	</li>
					<li>
						<?php $rasp_path = $config["RASPBERRYPI_HOSTNAME"].":".$config["RASPBERRYPI_PORT"]."/"; ?>
		        		<a href="<?php echo "http://".$rasp_path; ?>">
							<button type="button" class="services">
								Chack Surgery Robot Status
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
	</div>

	<script src="../../js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>

    </script>
</body>
</html>
