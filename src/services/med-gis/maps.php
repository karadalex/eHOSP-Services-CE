<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



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
			include '../includes/php/header.php';
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

      	<?php
        } else {
        ?>
        <div class="row">
        	<h1>
	        	Error
	        </h1>
        	<p>
        		You are currently not Signed In!<br>
        		Please <a href='../../sign.php'>Sign In</a> or <a href='../../register.php'>Register</a>
        	</p>
        </div>
        <?php
        }
        ?>
        
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
