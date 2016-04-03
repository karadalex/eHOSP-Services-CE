<?php
    session_start();
    error_reporting(0);

    include 'db/connect.php';
    include 'methods/general.php';
    include 'methods/users.php';

    $errors = array();
?>
