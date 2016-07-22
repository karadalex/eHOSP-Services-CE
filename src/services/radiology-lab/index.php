<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));

$user = new User(); //Current

if ($user->data()->user_type != 'RADIOLOGIST' &&
    $user->data()->user_type != 'RADIOLOGIST TECHNOLOGIST') {
    Redirect::to('../../services.php');
}
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Radiology Lab</title>
	<?php
		include '../../includes/php/head.php';
	?>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <script src="js/dashboard.js"></script>
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
        if($user->isLoggedIn()) {
        ?>


		<div class="row">
	        <h1>Radiology Lab</h1>
	        <br>
            
            

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
