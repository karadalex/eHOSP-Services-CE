<?php
    $config = include('../../config.php');

    // Connect to MySQL
    $connect = mysql_connect($config['DB_HOSTNAME'], $config['DB_ROOT_USERNAME'], $config['DB_ROOT_PASSWORD']);

    // Create Database and insert the schema structure
    $create_query = 'CREATE DATABASE ehosp';
    $create_result = mysqli_query($create_query, $connect);

    // Load SQL code from file and import in MySQL Database
    $db_code_path = "../db/ehosp.sql";
    $db_code_file = fopen($db_code_path, "r") or die("Unable to find SQL file");
    $install_query = fread($db_code_file, filesize($db_code_path));
    $install_result = mysqli_query($install_query, $connect);
    fclose($db_code_file);
?>
