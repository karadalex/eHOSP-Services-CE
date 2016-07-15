<?php
require_once 'core/init.php';
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Doc</title>
	<?php
		include 'includes/php/head.php';
	?>
</head>
<body>
	<div id="container">
		<?php
		include 'includes/php/header.php';
		?>

		<div class="row">
	        <h1>Documentation</h1>
	        <p>
				Welcome to eHOSP, the hospital on the cloud,
				a platform for e-health and e-medicine!
			</p>
			<?php 
			echo li(button("#", "For Users"));
			echo li(button("https://karadalex.gitbooks.io/ehosp-documentation/content/", "For Developers"));
			?>
      	</div>
	</div>

	<?php include 'includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
