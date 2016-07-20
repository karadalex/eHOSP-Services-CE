<?php
require_once 'core/init.php';

$error_msg = '';
?>


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>eHOSP - Settings</title>
	<?php
		include 'includes/php/head.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/forms.css">
</head>
<body>
	<div id="container">
		<?php
		include 'includes/php/header.php';
		?>

		<div>
	        <h1> Change Settings</h1>

            <?php

            // TODO:
            // 1. Validate form to assert that username is unique
            // 2. Display error messages

            $user = new User(); //Current
            if($user->isLoggedIn()) {
                if(Input::exists()) {
                    $salt = Hash::salt(32);
                    $db = DB::getInstance();

                    try {
                        $db->update('user_registry', $user->data()->user_id, array(
                            'username' => Input::get('username'),
                            'first_name' => Input::get('first_name'),
                            'last_name' => Input::get('last_name'),
                            'email' => Input::get('email'),
                            'user_type' => Input::get('user_type')
                        ));

	                    if (Input::get('password') !== "") {
	                    	if ($user->data()->password !== Hash::make(Input::get('password'), $user->data()->salt)) {
	                    		$validate = new Validation();
			                    $validation = $validate->check($_POST, array(
			                        'password' => array(
			                            'required' => true,
			                            'min' => 6
			                        ),
			                        'password_again' => array(
			                            'required' => true,
			                            'matches' => 'password'
			                        )
			                    ));

			                    if ($validate->passed()) {
		                            $db->update('user_registry', $user->data()->user_id, array(
			                            'password' => Hash::make(Input::get('password'), $salt),
			                            'salt' => $salt
			                        ));
		                        } else {
			                        foreach($validation->errors() as $error) {
			                            $error_msg .= $error . '\n';
			                        }
			                    }
	                        }
	                    }

                        // Session::flash('home', "<script>alert('Your settings have been saved successfully');</script>");
                        Redirect::to('user_settings.php');
                        echo "Your changes have been saved successfully!";
                    } catch (Exception $e) {
                        die($e->getMessage());
                    }
                }
            }
            ?>



	        <section>
				<form action="" method="post" id="register_form">
					<ul class="input-list style-1 clearfix">
						<li>
							<input type="text" placeholder="First Name" name="first_name" value="<?php echo escape($user->data()->first_name); ?>">
						</li>
						<li>
							<input type="text" placeholder="Last Name" name="last_name" value="<?php echo escape($user->data()->last_name); ?>">
						</li>
						<li>
							<input type="email" placeholder="Email" name="email" value="<?php echo escape($user->data()->email); ?>">
						</li>
						<li>
							<input type="text" placeholder="Userame" name="username" value="<?php echo escape($user->data()->username); ?>">
						</li>
						<li>
							<input type="password" placeholder="Password" name="password">
						</li>
	                    <li>
							<input type="password" placeholder="Retype password" name="password_again">
						</li>
						<li>
							<select name="user_type">
								<option value="null"  <?php if($user->data()->user_type == 'null') echo 'selected'; ?>>User Type</option>
								<?php
								for ($i=0; $i < count($userTypes); $i++) {
									echo "<option value='" . $userTypes[$i] . "'" .  (($user->data()->user_type == $userTypes[$i]) ? 'selected' : '') . ">" . $userTypes[$i] . "</option>";
								}
								?>
							</select>
						</li>
					</ul>

                    <input type="hidden" name="token" value="<?php echo Token::generate();?>">
					<input type="submit" value="Save">
				</form>
			</section>

      	</div>
	</div>



    <?php
    if (strlen($error_msg) > 0) {
        echo '<script type="text/javascript">alert("' . $error_msg . '");</script>';
    }
    ?>

	<?php include 'includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
