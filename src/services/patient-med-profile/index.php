<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Patient Health</title>
	<?php
		include '../../includes/php/head.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/blue-buttons-list.css">
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
	        <h1>Patient Health Profile</h1>
	        <p>
				Welcome to eHOSP, the hospital on the cloud,
				a platform for e-health and e-medicine!
			</p>

			<style>
	            .no-menu:hover {
	                background: none;
	                box-shadow: none;
	            }
	        </style>

			<ul id="buttons">
				<?php
				echo li(button("services/patient-med-profile/BodyMeasurements.php", "Body Measurements"));
				echo li(button("services/patient-med-profile/Fitness.php", "Fitness"));
				echo li(button("services/patient-med-profile/Me.php", "Me"));
				echo li(button("services/patient-med-profile/Nutrition.php", "Nutrition"));
				echo li(button("services/patient-med-profile/ReproductiveHealth.php", "Reproductive Health"));
				echo li(button("services/patient-med-profile/Results.php", "Results"));
				echo li(button("services/patient-med-profile/Sleep.php", "Sleep"));
				echo li(button("services/patient-med-profile/Vitals.php", "Vitals"));
				?>
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

	<?php include '../../includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
