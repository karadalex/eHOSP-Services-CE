<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Medical GIS - Maps</title>
	<?php
		include '../../includes/php/head.php';
	?>
	<link rel="stylesheet" href="vendor/leaflet/leaflet.css" />
	<link rel="stylesheet" href="css/edit_map.css" />
</head>
<body>
	<div id="container">
		<?php
			include '../../includes/php/header.php';
		?>

		<?php
        if(Session::exists('home')) {
            echo '<p>' . Session::flash('home'). '</p>';
        }
        $user = new User(); //Current
        if($user->isLoggedIn()) {
        ?>


		<div class="row">
	        <h1>Medical GIS Maps</h1>
	        <p>

			</p>
      	</div>
	</div>

	<div id="map" style="width: 90%; height: 500px; margin-left:5%; margin-bottom: 30px"></div>
	<script src="vendor/leaflet/leaflet.js"></script>
	<script src="js/maps.js"></script>
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

	<?php
	} else {
	?>
	<div class="row">
		<h1>
			Error
		</h1>
		<p>
			You are currently not Signed In!<br>
			Please <a href='sign.php'>Sign In</a> or <a href='register.php'>Register</a>
		</p>
	</div>
	<?php
	}
	?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
