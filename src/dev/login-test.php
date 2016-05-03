<?php
require_once '../core/init.php';

$error_msg = '';

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

        if ($validation->passed()) {
            $user = new User();
            $login = $user->login(Input::get('username'), Input::get('password'));

            if ($login) {
                echo "You are logged in";
            } else {
                echo "You can't login";
            }
        } else {
            foreach($validation->errors() as $error) {
				$error_msg .= $error . '\n';
			}
        }
    }
}
?>

<form action="" method="post">
	<input type="text" name="username" value="<?php echo escape(Input::get('username')); ?>">
	<input type="password" name="password" value="">

    <input type="hidden" name="token" value="<?php echo Token::generate();?>">
    <input type="submit" value="Log in">
</form>


<?php
// var_dump($error_msg);
if (strlen($error_msg) > 0) {
	echo '<script type="text/javascript">alert("' . $error_msg . '");</script>';
}
?>
