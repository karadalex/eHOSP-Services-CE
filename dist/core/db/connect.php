<?php
    $MYSQL_DATABASE_NAME = "ehosp";
    $MYSQL_HOSTNAME = "localhost";
    $MYSQL_USERNAME = "root";
    $MYSQL_ROOT_PASSWORD = "rootpsswd";

    // For debugging purposes, not to be used in production:
    // mysqli_connect($MYSQL_HOSTNAME, $MYSQL_USERNAME, $MYSQL_ROOT_PASSWORD) or die(mysqli_error());
    mysqli_connect($MYSQL_HOSTNAME, $MYSQL_USERNAME, $MYSQL_ROOT_PASSWORD);
    mysqli_select_db($MYSQL_DATABASE_NAME);
?>
