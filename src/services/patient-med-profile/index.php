<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Patient Health</title>
	<?php
		include '../includes/html/head.html';
	?>
	<link rel="stylesheet" type="text/css" href="../../css/blue-buttons-list.css">
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
	        <h1>Patient Health Profile</h1>
	        <p>
				Welcome to eHOSP, the hospital on the cloud,
				a platform for e-health and e-medicine!
			</p>
			<ul id="buttons">
				<li>
					<button type="button" class="services" onclick="location.href='BodyMeasurements.php';">
						Body Measurements
					</button>
				</li>
				<li>
					<button type="button" class="services" onclick="location.href='Fitness.php';">
						Fitness
					</button>
				</li>
				<li>
					<button type="button" class="services" onclick="location.href='Me.php';">
						Me
					</button>
				</li>
				<li>
					<button type="button" class="services" onclick="location.href='Nutrition.php';">
						Nutrition
					</button>
				</li>
				<li>
					<button type="button" class="services" onclick="location.href='ReproductiveHealth.php';">
						Reproductive Health
					</button>
				</li>
				<li>
					<button type="button" class="services" onclick="location.href='Results.php';">
						Results
					</button>
				</li>
				<li>
					<button type="button" class="services" onclick="location.href='Sleep.php';">
						Sleep
					</button>
				</li>
				<li>
					<button type="button" class="services" onclick="location.href='Vitals.php';">
						Vitals
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
        		Please <a href='../../sign.php'>Sign In</a> or <a href='../../register.php'>Register</a>
        	</p>
        </div>
        <?php
        }
        ?>
        
	</div>

	<script src="../../js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
