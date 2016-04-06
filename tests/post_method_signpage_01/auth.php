<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 4/4/2016
 * Time: 10:54 μμ
 */

// Check if $_POST array is null
var_dump($_POST);

// Get username, password from sign in form in src/sign.php:
if (empty($_POST) === false) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if these are Null
    var_dump($username);
    var_dump($password);
}

?>
