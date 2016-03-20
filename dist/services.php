<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Hospital on the cloud</title>
	<?php
		include 'includes/html/head.html';
	?>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div id="container">
		<div w3-include-HTML="includes/html/header.html"></div>
		<script src="js/w3-include-HTML.js"></script>

		<div class="row">
	        <h1>
	        	eHOSP Services
	        </h1>

	        <ul>
	        	<li>
	        		<a href="services/medical-diagnosis">
						<button type="button" class="services">
							Medical diagnosis & Diseases Database
						</button>
					</a>
	        	</li>
	        	<li>
	        		<a href="services/patient-med-profile">
						<button type="button" class="services">
							Patient Health Profile
						</button>
					</a>
	        	</li>
	        	<li>
	        		<a href="services/surgery-printing">
						<button type="button" class="services">
							Remote Surgery & Remote 3D Bioprinting tool
						</button>
					</a>
	        	</li>
	        	<li>
	        		<a href="services/research-platform">
						<button type="button" class="services">
							Research Platform
						</button>
					</a>
	        	</li>
	        </ul>
      	</div>
	</div>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>

    <script type="text/javascript" src="js/dynamic.js"></script>
</body>
</html>
