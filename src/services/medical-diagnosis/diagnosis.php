<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Medical Diagnosis & Medical Database</title>
	<?php
		include '../includes/html/head.html';
	?>
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<link rel="stylesheet" type="text/css" href="../../css/forms.css">
	<style type="text/css">
		#SubmitDiagnosis {
			margin-top: 50px;
			width: 40%;
			margin-left: 30%;
			text-align: center;
		}

		@media only screen and (max-width: 40.063em) {
			#SubmitDiagnosis {
				width: 80%;
				margin-left: 10%;
			}
		}
	</style>
</head>
<body>
	<div id="container">
		<?php
			include '../includes/php/header.php';
		?>


		<?php
        if(Session::exists('home')) {
            echo '<p>' . Session::flash('home'). '</p>';
        }
        $user = new User(); //Current
        if($user->isLoggedIn()) {

        	// Check if data has been passed to _POST
        	// var_dump($_POST);
        	if (!empty($_POST)) {
        		$db = DB::getInstance();
        		$userData = $user->data();

        		// Generate a JSON object to store in database containing diagnosis information
        		$json = new Json();
        		$jsonObj = $json->create($_POST);

        		// Insert data in diagnosis
        		// TODO: In future require all the of rest fields (now some are NULL)
        		$db->insert('user_diagnosis', array(
        			'user_id' => $userData->user_id,
        			'json_diagnosis_result' => $jsonObj

        		));
        	}

        ?>


        <form action="" method="post" id="form">
			<div class="row">
		        <h1>Medical Diagnosis</h1>

		        <h5>Please select a category below:</h5><br>
		        <div id="category" class="input-list style-1 clearfix"></div>
				<div id="subcategory" class="input-list style-1 clearfix"></div>
				<div id="diagnosis" class="input-list style-1 clearfix"></div>

	            <script type="text/javascript" src="js/diagnosis-form.js"></script>
	    	</div>

	    	<input type="hidden" name="token" value="<?php echo Token::generate();?>">
	    	<div id="submit_form"></div>
	    </form>

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
