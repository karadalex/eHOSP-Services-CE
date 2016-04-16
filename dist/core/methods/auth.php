<?php
    include '../init.php';

    if (user_exits("username-test-1") === true) {
        echo 'exists';
    }

    // Get username, password from sign in form in src/sign.php:
    if (empty($_POST) === false) {
        $username = $_POST['username'];
        $password = $_POST['password'];


        if (empty($username) || empty($password)) {
            $errors[] = 'You must enter username and password';
        } elseif (user_exists($username) === false) {
            $errors[] = 'Sorry, this user doesn\'t exist';
        }
    }

?>
