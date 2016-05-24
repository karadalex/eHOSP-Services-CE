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

			<style>
	            .no-menu:hover {
	                background: none;
	                box-shadow: none;
	            }
	        </style>
	        <ul>
				<?php
				echo li(button("services/medical-diagnosis", "Medical diagnosis & Diseases Database"));
				echo li(button("services/patient-med-profile", "Patient Health Profile"));
				echo li(button("services/genetic-code", "Genetic Code Service"));
				echo li(button("services/surgery-printing", "Remote Surgery & Remote 3D Bioprinting tool"));
				echo li(button("services/med-gis", "Medical Geographic Information System"));
				echo li(button("services/research-platform", "Research Platform"));
				?>

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

	<?php include 'includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
