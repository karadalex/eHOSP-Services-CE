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
	        <h1>Genetic Code Service</h1>
	        <p>
				A service for analyzing genetic code and use it for customized treatments
			</p>

			<h2> What is Genetic Code? </h2>
			<p>
				The genetic code is the set of rules by which information encoded in
				genetic material (DNA or RNA sequences) is translated into proteins
				(amino acid sequences) by living cells.
				<br>
				<i><a href="https://www.sciencedaily.com/terms/genetic_code.htm">Science Daily</a></i>
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
