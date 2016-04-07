<?php
    $config = include('../../config.php');

    // Procedural:
    // mysqli_connect($config['DB_HOSTNAME'], $config['DB_ROOT_USERNAME'], $config['DB_ROOT_PASSWORD']);
    // mysqli_select_db($MYSQL_DATABASE_NAME);

    // Object-Oriented:
    $mysql_connect = new mysqli($config['DB_HOSTNAME'], $config['DB_ROOT_USERNAME'], $config['DB_ROOT_PASSWORD']);
    $mysql_connect->select_db($config['DB_NAME']);
?>
