<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Surgery Design</title>
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
	        <h1>Surgery Design</h1>
	        <p>
	        	Design a surgical procedure to be executed remotely with a surgical robotical
	        	mechanism
			</p>
			<ul id="buttons">
				<li>
					<button type="button" class="services" onclick="location.href='services/surgery-printing/surgery_sample_tasks.php';">
						Sample Tasks
					</button>
				</li>
				<li>
					<button type="button" class="services" onclick="location.href='services/surgery-printing/custom_surgery.php';">
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
