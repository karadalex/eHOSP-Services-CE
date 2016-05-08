<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Research Platform</title>
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
	        <h1>Genetic Code Service</h1>
	        <p>
				A service for analyzing genetic code and use it for customized treatments
			</p>
			<ul id="buttons">
				
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
