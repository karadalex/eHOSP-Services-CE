<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Medical Diagnosis & Medical Database</title>
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
	        <h1>Medical Diagnosis & Medical Database</h1>
	        <p>
				Use the "Medical Diagnosis" service to diagnose accurately the disease or disorder of
				the patient and do the necessary steps to cure it.
			</p>
			<p>
				Use the "Medical Database" to find information about diseases, medication and other.
			</p>

			<style>
	            .no-menu:hover {
	                background: none;
	                box-shadow: none;
	            }
	        </style>

			<ul id="buttons">
				<?php
				echo li(button("services/medical-diagnosis/diagnosis.php", "Medical Diagnosis"));
				echo li(button("services/medical-diagnosis/medHistory.php", "Medical History"));
				echo li(button("#", "Medical Database"));
				echo li(button("services/medical-diagnosis/links.php", "Useful Links"));
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
