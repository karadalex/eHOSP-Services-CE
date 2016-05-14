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
		include 'includes/php/header.php';
		?>

		<div>
	        <h1> Create an account</h1>

            <?php
            if(Input::exists()) {
                if (Token::check(Input::get('token'))) {
                    $validate = new Validation();
                    $validation = $validate->check($_POST, array(
                        'first_name' => array(
                            'required' => true
                        ),
                        'last_name' => array(
                            'required' => true
                        ),
                        'email' => array(
                            'required' => true
                        ),
                        'username' => array(
                            'required' => true,
                            'min' => 4,
                            'max' => 20,
                            'unique' => 'user_registry'
                        ),
                        'password' => array(
                            'required' => true,
                            'min' => 6
                        ),
                        'password_again' => array(
                            'required' => true,
                            'matches' => 'password'
                        ),
                        'age' => array(
                            'required' => true
                        ),
                        'birth_country' => array(
                            'required' => true
                        ),
                        // 'name' => array(
                        // 	'required' => true,
                        // 	'min' => 2,
                        // 	'max' => 50
                        // )
                    ));

                    if ($validate->passed()) {
                        $user = new User();

                        $salt = Hash::salt(32);

                        try {
                            // TODO: Add more registration fields
                            $user->create(array(
                                'username' => Input::get('username'),
                                'password' => Hash::make(Input::get('password'), $salt),
                                'salt' => $salt,
                                'first_name' => Input::get('first_name'),
                                'last_name' => Input::get('last_name'),
                                'email' => Input::get('email'),
                                'gender' => Input::get('gender'),
                                'user_type' => Input::get('user_type'),
                                'age' => Input::get('age'),
                                'birth_country' => Input::get('birth_country'),
                                'social_security_number' => (strlen(Input::get('ssn')) > 0) ? (Input::get('ssn')) : NULL,
                                'date' => date('Y-m-d H:i:s')
                            ));

                            Session::flash('home', 'You have successfully registered! You can now log in');
                            Redirect::to('sign.php');
                            // Redirect::to(404);
                        } catch (Exception $e) {
                            // TODO: Redirect to specific error page instead of die
                            die($e->getMessage());
                        }

                    } else {
                        foreach($validation->errors() as $error) {
                            $error_msg .= $error . '\n';
                        }
                    }
                }
            }
            ?>            
            
            

	        <section>
				<form action="" method="post" id="register_form">
					<ul class="input-list style-1 clearfix">
						<li>
							<input type="text" placeholder="First Name" name="first_name" value="<?php echo escape(Input::get('first_name')); ?>">
						</li>
						<li>
							<input type="text" placeholder="Last Name" name="last_name" value="<?php echo escape(Input::get('last_name')); ?>">
						</li>
						<li>
							<input type="email" placeholder="Email" name="email" value="<?php echo escape(Input::get('email')); ?>">
						</li>
						<li>
							<input type="text" placeholder="Userame" name="username" value="<?php echo escape(Input::get('username')); ?>">
						</li>
						<li>
							<input type="password" placeholder="Password" name="password">
						</li>
	                    <li>
							<input type="password" placeholder="Retype password" name="password_again">
						</li>
						<hr>
						<li>
							<select name="gender">
								<option value="null" <?php if(Input::get('gender') == 'null') echo 'selected'; ?>>Gender</option>
								<option value="male" <?php if(Input::get('gender') == 'male') echo 'selected'; ?>>Male</option>
								<option value="female" <?php if(Input::get('gender') == 'female') echo 'selected'; ?>>Female</option>
							</select>
						</li>
						<li>
							<select name="user_type">
								<option value="null"  <?php if(Input::get('user_type') == 'null') echo 'selected'; ?>>User Type</option>
								<option value="doctor"  <?php if(Input::get('user_type') == 'doctor') echo 'selected'; ?>>Doctor</option>
								<option value="patient"  <?php if(Input::get('user_type') == 'patient') echo 'selected'; ?>>Patient</option>
							</select>
						</li>
						<li>
							<input type="text" placeholder="Age" name="age" value="<?php echo escape(Input::get('age')); ?>">
						</li>
						<li>
							<input type="text" placeholder="Birth Country" name="birth_country" value="<?php echo escape(Input::get('birth_country')); ?>">
						</li>
						<li>
							<input type="text" placeholder="Social Security Number" name="ssn" value="<?php echo escape(Input::get('ssn')); ?>">
						</li>
					</ul>
                    
                    <input type="hidden" name="token" value="<?php echo Token::generate();?>">
					<input type="submit" value="Register">
				</form>
			</section>

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
