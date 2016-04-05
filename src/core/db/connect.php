<?php
    $config = include('../../config.php');
    
    $MYSQL_DATABASE_NAME = $config['DB_NAME'];
    $MYSQL_HOSTNAME = $config['DB_HOSTNAME'];
    $MYSQL_USERNAME = $config['DB_ROOT_USERNAME'];
    $MYSQL_ROOT_PASSWORD = $config['DB_ROOT_PASSWORD'];

    // For debugging purposes, not to be used in production:
    // mysqli_connect($MYSQL_HOSTNAME, $MYSQL_USERNAME, $MYSQL_ROOT_PASSWORD) or die(mysqli_error());
    mysqli_connect($MYSQL_HOSTNAME, $MYSQL_USERNAME, $MYSQL_ROOT_PASSWORD);
    mysqli_select_db($MYSQL_DATABASE_NAME);
?>
