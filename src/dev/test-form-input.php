<?php
require_once '../core/init.php';

var_dump(Input::exists());
echo "<br>";
var_dump(Input::get('token'));
echo "<br>";
var_dump(Token::check(Input::get('token')));
echo "<br>";
var_dump($_SESSION);
echo "<br>";
$error_msg = "";
var_dump($error_msg);
echo "<br>";

if(Input::exists()) {
	// TODO: Fix this if statement
	// if (Token::check(Input::get('token'))) {
		// Run this for debuuging
		// echo Input::get('username');
		$validate = new Validation();
		$validation = $validate->check($_POST, array(
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
			// 'name' => array(
			// 	'required' => true,
			// 	'min' => 2,
			// 	'max' => 50
			// )
		));

		if ($validation->passed()) {
			$user = new User();

			$salt = Hash::salt(32);

			try {
				// TODO: Add more registration fields
				$user->create(array(
					'username' => Input::get('username'),
					'password' => Hash::make(Input::get('password'), $salt),
					'salt' => $salt,
					'date' => date('Y-m-d H:i:s')
				));

				Session::flash('home', 'You have successfully registered! You can now log in');
				Redirect::to('tests.php');
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
	// }
}
?>


/*********************************************************************************
* Testing Input class
*
*********************************************************************************/
<form action="" method="post">
	<input type="text" name="username" value="<?php echo escape(Input::get('username')); ?>">
	<input type="password" name="password" value="">
	<input type="password" name="password_again" value="">
	<input type="hidden" name="token" value="<?php echo Token::generate(); // Generate token when page reloads?>">
	<input type="submit" value="Register">
</form>


<?php
// Output error Message when page is loaded
if (strlen($error_msg) > 0) {
	echo '<script type="text/javascript">alert("' . $error_msg . '");</script>';
} ?>
