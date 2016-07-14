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
				$userType = $user->data()->user_type;
				switch ($userType) {
					case 'PATIENT':
						include "views/patient.php";
						break;
					default:
						# code...
						break;
				}
				?>

				<!-- Settings Section, Only for Administrators -->
				<?php
				$permissions = $user->role();
				if ($permissions == "admin") {
					echo "<hr>"; 
					echo li(button("settings.php", "Settings"));
				} 
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

	<?php include 'includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
