<?php
    chdir('../../src');
    $config = include('config.php');

    $connection = new mysqli($config['DB_HOSTNAME'], $config['DB_ROOT_USERNAME'], $config['DB_ROOT_PASSWORD']);
    if (!$connection) {
        echo mysqli_error();
    }
    else {
        die("Connected successfully in database");
    }
?>
