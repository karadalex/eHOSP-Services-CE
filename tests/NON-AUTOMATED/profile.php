<?php

require_once '../../core/init.php';
if(Session::exists('home')) {
    echo '<p>' . Session::flash('home'). '</p>';
}
$user = new User(); //Current
if($user->isLoggedIn()) {
?>

    <p>Hello, <?php echo escape($user->data()->username);?><?php echo escape($user->data()->username); ?></p>

    <ul>
        <li><a href="update.php">Update Profile</a></li>
        <li><a href="changepassword.php">Change Password</a></li>
        <li><a href="logout-test.php">Log out</a></li>
    </ul>
<?php
    if($user->hasPermission('admin')) {
        echo '<p>You are a Administrator!</p>';
    }
} else {
    echo '<p>You need to <a href="login-test.php">login</a> or <a href="test-form-input.php">register.</a></p>';
}