<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Medical Diagnosis & Medical Database</title>
	<?php
		include '../includes/html/head.html';
	?>
	<link rel="stylesheet" type="text/css" href="../../css/blue-buttons-list.css">
</head>
<body>
	<div id="container">
		<?php
			include '../includes/html/header.html';
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
			<ul id="buttons">
	        	<li>
					<button type="button" class="services" onclick="location.href='diagnosis.php';">
						Medical Diagnosis
					</button>
	        	</li>
	        	<li>
					<button type="button" class="services" onclick="location.href='#';">
						Medical Database
					</button>
	        	</li>
				<li>
					<button type="button" class="services" onclick="location.href='links.php';">
						Useful Links
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
