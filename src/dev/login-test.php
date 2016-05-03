<?php
require_once '../core/init.php';

$error_msg = '';

if (Input::exists()) {
    // echo 'Test1<br>';
    if (Token::check(Input::get('token'))) {
        // echo 'Test2<br>';

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
            // log user in
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
// Output error Message when page is loaded
// echo "Test3";
var_dump($error_msg);
if (strlen($error_msg) > 0) {
    // echo "Test4";
	echo '<script type="text/javascript">alert("' . $error_msg . '");</script>';
}
?>
