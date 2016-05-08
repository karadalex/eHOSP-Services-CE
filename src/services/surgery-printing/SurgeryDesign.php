<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Surgery Design</title>
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
	        <h1>Surgery Design</h1>
	        <p>
	        	Design a surgical procedure to be executed remotely with a surgical robotical
	        	mechanism
			</p>
			<ul id="buttons">
				<li>
					<button type="button" class="services" onclick="location.href='surgery_sample_tasks.php';">
						Sample Tasks
					</button>
				</li>
				<li>
					<button type="button" class="services" onclick="location.href='custom_surgery.php';">
						Design your own Task
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
