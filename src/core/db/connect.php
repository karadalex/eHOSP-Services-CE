<?php
    $config = include('../../config.php');

    mysqli_connect($config['DB_HOSTNAME'], $config['DB_ROOT_USERNAME'], $config['DB_ROOT_PASSWORD']);
    mysqli_select_db($MYSQL_DATABASE_NAME);
?>
