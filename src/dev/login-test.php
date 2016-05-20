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

        if ($validate->passed()) {
            $user = new User();

            $remember = (Input::get('remember') === 'on') ? true :false;
            $login = $user->login(Input::get('username'), Input::get('password'), $remember);

            if ($login) {
                echo "You are logged in";
                Redirect::to('profile.php');
            } else {
                echo "You can't login";
            }
        } else {
            foreach($validate->errors() as $error) {
				$error_msg .= $error . '\n';
			}
        }
    }
}

var_dump($_SESSION);
echo "<br>";
var_dump($_COOKIE);
?>

<form action="" method="post">
	<input type="text" name="username" value="<?php echo escape(Input::get('username')); ?>">
	<input type="password" name="password" value="">
    <input type="checkbox" name="remember"> Remember me

    <input type="hidden" name="token" value="<?php echo Token::generate();?>">
    <input type="submit" value="Log in">
</form>


<?php
// var_dump($error_msg);
if (strlen($error_msg) > 0) {
	echo '<script type="text/javascript">alert("' . $error_msg . '");</script>';
}
?>
