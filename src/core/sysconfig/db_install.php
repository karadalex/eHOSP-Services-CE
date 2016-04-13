<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Simple Incision 1</title>
    <link rel="stylesheet" href="../../css/simple_page.css" />
    <?php $config = include('../../config.php'); ?>
</head>
<body>
    <div id="container">
        <div class="row">
            <h1>Install eHOSP Database</h1>
            <div id="text">
                <p>  
                    <?php
                        $config = include('../../config.php');

                        // Connect to MySQL
                        $connect = new mysqli($config['DB_HOSTNAME'], $config['DB_ROOT_USERNAME'], $config['DB_ROOT_PASSWORD']);

                        // Check connection
                        if ($connect->connect_error) {
                            die("Connection failed: " . $connect->connect_error ."<br>");
                        }

                        // Create Database and insert the schema structure
                        $create_query = "CREATE DATABASE IF NOT EXISTS `ehosp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
                        if ($connect->query($create_query) === TRUE) {
                            echo "Database created successfully<br>";
                        } else {
                            echo "Error creating database: " . $connect->error ."<br>";
                        }

                        // Load SQL code from file and import in MySQL Database
                        $db_code_path = "../db/ehosp.sql";
                        $db_code_file = fopen($db_code_path, "r") or die("Unable to find SQL file");
                        $install_query = fread($db_code_file, filesize($db_code_path));
                        if ($connect->multi_query($install_query) === TRUE) {
                            echo "Database installed successfully<br>";
                        } else {
                            echo "Error installing database: " . $connect->error ."<br>";
                        }
                        fclose($db_code_file);
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
