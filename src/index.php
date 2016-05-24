<?php
require_once 'core/init.php';
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Hospital on the cloud</title>
	<?php
		include 'includes/php/head.php';
		include 'core/init.php';
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
        $user = new User();
        if($user->isLoggedIn()) {
			Redirect::to('services.php');
		} else {
        ?>


		<div class="main">
	        <h1> Welcome to eHOSP</h1>
	        <p>
				Welcome to eHOSP, the hospital on the cloud,
				a platform for e-health and e-medicine!
			</p>
			<p>
				Click below to get started
			</p>
			<p>
				<style>
					.no-menu:hover {
						background: none;
						box-shadow: none;
					}
				</style>
				<?php echo button("sign.php", "Get Started"); ?>
			</p>
    	</div>

		<?php } ?>
	</div>

	<?php include 'includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
