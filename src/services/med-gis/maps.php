<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Medical GIS - Maps</title>
	<?php
		include '../includes/html/head.html';
	?>
	<link rel="stylesheet" href="leaflet/leaflet.css" />
</head>
<body>
	<div id="container">
		<?php
			include '../includes/html/header.html';
		?>

		<div class="row">
	        <h1>Medical GIS Maps</h1>
	        <p>

			</p>
      	</div>
	</div>

	<div id="map" style="width: 90%; height: 500px; margin-left:5%; margin-bottom: 30px"></div>
	<script src="leaflet/leaflet.js"></script>
	<script src="js/main.js"></script>

	<script src="../../js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
