<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Research Platform</title>
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
	        <h1>Research Platform</h1>
	        <p>

			</p>

			<ul id="buttons">
				<li>
					<button type="button" class="services" onclick="location.href='services/research-platform/ml';">
						Machine Learning Lab
					</button>
				</li>
				<li>
					<button type="button" class="services" onclick="location.href='services/research-platform/med-software';">
						Medicine Software
					</button>
				</li>
				<li>
					<button type="button" class="services" onclick="location.href='services/research-platform/py-platform';">
						Scientific Python
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
