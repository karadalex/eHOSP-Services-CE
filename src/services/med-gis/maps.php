<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Medical GIS - Maps</title>
	<?php
		include '../includes/html/head.html';
	?>
	<link rel="stylesheet" href="leaflet/leaflet.css" />
	<link rel="stylesheet" href="css/edit_map.css" />
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
	<script src="js/gis_remote_nodes.js"></script>

	<div id="edit_map">
		<ul>
			<li>
				<button onclick="gis_remote_nodes();">
					Candidate remote places
				</button>
			</li>
			<li>
				<button>
					Remote places with working surgery robots
				</button>
			</li>
			<li>
				<button>
					Hospitals or Doctors in charge
				</button>
			</li>
		</ul>
	</div>

	<script src="../../js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
