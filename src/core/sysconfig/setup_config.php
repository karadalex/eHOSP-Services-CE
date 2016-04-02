<?php
    // Get the configuration settings for the settings page
    if (empty($_POST) === false) {
        $APP_HOSTNAME = $_POST['hostname'];
        $APP_USERNAME = $_POST['username'];
        $DB_HOSTNAME = $_POST['db_hostname'];
        $DB_PORT = $_POST['db_port'];
        $DB_USERNAME = $_POST['db_username'];
    }
?>
