<?php
    // Get the configuration settings for the settings page
    if (empty($_POST) === false) {
        // Application's Info
        $APP_HOSTNAME = $_POST['APP_HOSTNAME'];
        $APP_ADMIN_USERNAME = $_POST['APP_ADMIN_USERNAME'];
        $APP_ADMIN_PASSWORD = $_POST['APP_ADMIN_PASSWORD'];
        $APP_ADMIN_PASSWORD_verification = $_POST['APP_ADMIN_PASSWORD_verification'];

        // Database's Info
        $DB_HOSTNAME = $_POST['DB_HOSTNAME'];
        $DB_PORT = $_POST['DB_PORT'];
        $DB_ROOT_USERNAME = $_POST['DB_ROOT_USERNAME'];
        $DB_ROOT_PASSWORD = $_POST['DB_ROOT_PASSWORD'];
        $DB_ROOT_PASSWORD_verification = $_POST['DB_ROOT_PASSWORD_verification'];

        // Raspberry Pi's Info
        $RASPBERRYPI_HOSTNAME = $_POST['RASPBERRYPI_HOSTNAME'];
        $RASPBERRYPI_PORT = $_POST['RASPBERRYPI_PORT'];
    }
?>
