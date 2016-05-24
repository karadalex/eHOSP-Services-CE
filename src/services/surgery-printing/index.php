<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Remote Surgery & 3D Bioprinting</title>
	<?php
		include '../../includes/php/head.php';
		$config = include('../../config.php');
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
	        <h1>Remote Surgery & 3D Bioprinting</h1>
	        <p>
				Use this service to design surgery procedures which
				use robotic surgery and 3D bioprinting in parallel.
			</p>

			<style>
	            .no-menu:hover {
	                background: none;
	                box-shadow: none;
	            }
	        </style>

			<div id="buttons">
				<ul>
					<?php
					echo li(button("services/surgery-printing/SurgeryDesign.php", "Surgery Procedure Design"));
					echo li(button("services/surgery-printing/3DBioprintDesign.php", "3D Bioprinting Design"));
					$rasp_path = $config["RASPBERRYPI_HOSTNAME"].":".$config["RASPBERRYPI_PORT"]."/";
					echo li(button("http://".$rasp_path, "Check Surgery Robot Status"));
					echo li(button("services/surgery-printing/links.php", "Useful Links"));
					?>
		        </ul>
			</div>
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
