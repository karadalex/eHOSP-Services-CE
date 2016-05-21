<?php
require_once 'core/init.php';
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Hospital on the cloud</title>
	<?php
    	include 'includes/php/head.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div id="container">
		<?php
        include 'includes/php/header.php';
		?>


        <?php
        if(Session::exists('home')) {
            echo '<p>' . Session::flash('home'). '</p>';
        }
        $user = new User(); //Current
        if($user->isLoggedIn()) {
        ?>


		<div class="row">
	        <h1>
	        	eHOSP Services
	        </h1>

	        <ul>
	        	<li>
	        		<a href="services/medical-diagnosis">
						<button type="button" class="services">
							Medical diagnosis & Diseases Database
						</button>
					</a>
	        	</li>
	        	<li>
	        		<a href="services/patient-med-profile">
						<button type="button" class="services">
							Patient Health Profile
						</button>
					</a>
	        	</li>
				<li>
	        		<a href="services/genetic-code">
						<button type="button" class="services">
							Genetic Code Service
						</button>
					</a>
	        	</li>
	        	<li>
	        		<a href="services/surgery-printing">
						<button type="button" class="services">
							Remote Surgery & Remote 3D Bioprinting tool
						</button>
					</a>
	        	</li>
	        	<li>
	        		<a href="services/med-gis">
						<button type="button" class="services">
							Medical Geographic Information System
						</button>
					</a>
	        	</li>
	        	<li>
	        		<a href="services/research-platform">
						<button type="button" class="services">
							Research Platform
						</button>
					</a>
	        	</li>

				<!-- Settings Section -->
				<hr>
				<li>
	        		<a href="settings.php">
						<button type="button" class="services">
							Settings
						</button>
					</a>
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


	</div>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
