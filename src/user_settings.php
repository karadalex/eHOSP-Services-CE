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
								$userTypes = ['PATIENT', 'DOCTOR', 'MEDICAL LAB TECHNICIAN', 'SURGEON', 'SURGICAL TECHNOLOGIST',
								              'ANESTHESIOLOGIST', 'PHYSICAL THERAPIST','RADIOLOGIST', 'RADIOLOGIST TECHNOLOGIST',
											  'REGISTERED NURSE', 'BUSINESS OFFICE', 'PHYSICIAN', 'PATIENT ADVOCATE', 
											  'HEALTH SERVICES MANAGER', 'MEDICAL CODER', 'HEALTH INFORMATION TECHNICIAN',
											  'PHARMACY TECHNICIAN', 'PHARMACIST', 'SOCIAL WORKER', 'HOSPITAL ADMIN'];
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
