<?php
require_once 'core/init.php';

$error_msg = '';
?>



<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Hospital on the cloud</title>
	<?php
		include 'includes/html/head.html';
	?>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/forms.css">
</head>
<body>
	<div id="container">
		<?php
			include 'includes/html/header.html';
		?>

		<div>
	        <h1> Sign in or Create an account</h1>
            
            
            <?php
            if (Input::exists()) {
                if (Token::check(Input::get('token'))) {
                    $validate = new Validation();
                    $validation = $validate->check($_POST, array(
                        'username' => array(
                            'required' => true
                        ),
                        'password' => array(
                            'required' => true
                        )
                    ));

                    if ($validate->passed()) {
                        $user = new User();

                        $remember = (Input::get('remember') === 'on') ? true :false;
                        $login = $user->login(Input::get('username'), Input::get('password'), $remember);

                        if ($login) {
                            Redirect::to('services.php');
                        } else {
                            echo "<p>You can't login</p>";
                        }
                    } else {
                        foreach($validate->errors() as $error) {
                            $error_msg .= $error . '\n';
                        }
                    }
                }
            }
            ?>
            
            
	        <section>
				<form action="" method="post">
					<ul class="input-list style-1 clearfix">
						<li>
							<input type="text" placeholder="Username" name="username">
						</li>
						<li>
							<input type="password" placeholder="Password" name="password">
						</li>
                        <li>
                            <input type="checkbox" name="remember"> Remember me
                        </li>
					</ul>
                    

                    <input type="hidden" name="token" value="<?php echo Token::generate();?>">
					<input type="submit" value="Sign in">
				</form>
			</section>

			<p>Don't you have an account? Click <a href="register.php"> here</a> to register<p>

      	</div>
	</div>
    
    <?php
    if (strlen($error_msg) > 0) {
        echo '<script type="text/javascript">alert("' . $error_msg . '");</script>';
    }
    ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
