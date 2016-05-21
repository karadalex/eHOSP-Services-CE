<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Custom Surgery Design</title>
	<?php
		include '../../includes/php/head.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/forms.css">
	<link rel="stylesheet" type="text/css" href="css/surgDesign-interface.css">
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
	        <h1>Custom Surgery Design</h1>
	        <p>
	        	Design your own surgical task or procedure
			</p>

			<form>
				<div id="interface">
					<div id="left-panel" class="input-list style-1 clearfix">
						<ul id="tasks">
							<li>
								Action
								<select class="" name="action">

								</select>
							</li>
							<li>
								Sensor
								<select class="" name="sensor">

								</select>
							</li>
							<li>
								Flow
								<select class="" name="flow">

								</select>
							</li>
							<li>
								Data
								<select class="" name="data">

								</select>
							</li>
							<li>
								Advanced
								<select class="" name="advanced">

								</select>
							</li>
							<li>
								<button type="button" name="add_task" id="add_task">Add Task</button>
							</li>
						</ul>
					</div>

					<div id="right-panel">
						<div id="tasks-contents">
							Test
						</div>
					</div>
				</div>

				<input type="submit" value="Submit Surgery Procedure">
			</form>
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
