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
	        	<?php echo $user->data()->username; ?> 's Profile
	        </h1>

            <h3>Username</h3>
            <p>
                <?php echo $user->data()->username; ?>
            </p>
            <h3>Full Name</h3>
            <p>
                <?php echo $user->data()->first_name . " " . $user->data()->last_name; ?>
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

	<?php include 'includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
