<?php
    /***************************************************************************
    *
    * CONFIGURATION FILE:
    * Use this file to installand configure the application
    * @return : array with application's configuration information
    *
    * How to use it in project:
    * $config = include('config.php');
    *
    ***************************************************************************/
    $CONFIG = array(
        // Application's Info
        'APP_NAME' => 'eHosp',
        'APP_HOSTNAME' => 'localhost',
        'APP_ADMIN_USERNAME' => 'admin',
        'APP_ADMIN_PASSWORD' => 'adminpsswd',

        // Database's Info
        'DB_NAME' => 'ehosp',
        'DB_HOSTNAME' => 'localhost',
        'DB_PORT' => 3306,
        'DB_ROOT_USERNAME' => 'root',
        'DB_ROOT_PASSWORD' => 'rootpsswd',

        // Raspberry Pi's Info
        'RASPBERRYPI_HOSTNAME' => '192.168.x.x',
        'RASPBERRYPI_PORT' => 49153
    );

    return $CONFIG;
?>