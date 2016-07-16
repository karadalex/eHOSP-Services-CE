<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Communication</title>
	<?php
		include '../../includes/php/head.php';
	?>
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
	        <h1>Communication</h1>
	        <br>

			<p>
				Click below to choose how you want to communicate:
				<br>

				<style>
		            .no-menu:hover {
		                background: none;
		                box-shadow: none;
		            }
		        </style>

				<ul id="buttons">
					<?php echo li(button("services/communication/messages.php", "Messages")); ?>
					<?php echo li(button("services/communication/video-chat.php", "Video Chat")); ?>
				</ul>
			</p>
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


