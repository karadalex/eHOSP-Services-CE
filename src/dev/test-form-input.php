<?php
require_once '../core/init.php';
if(Input::exists()) {
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
		echo 'Passed';
	} else {
		$error_msg = "";
		foreach($validation->errors() as $error) {
			$error_msg .= $error . '\n';
		}
	}
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
	<input type="submit" value="Register">
</form>


<?php
// Output error Message when page is loaded
if (strlen($error_msg) > 0) {
	echo '<script type="text/javascript">alert("' . $error_msg . '");</script>';
} ?>
