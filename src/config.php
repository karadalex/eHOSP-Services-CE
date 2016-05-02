
<?php
    /***************************************************************************
    *
    * CONFIGURATION FILE:
    * Use this file to installand configure the application
    * @return : array with application's configuration information
    *
    * Last modified: 04/27/16 14:09:50
    *
    * How to use it in project:
    * $config = include('config.php');
    *
    ***************************************************************************/
    $CONFIG = array(
        // Application's Info
        'APP_NAME' => 'eHosp',
        'APP_HOSTNAME' => '127.0.0.1',
        'APP_ADMIN_USERNAME' => 'admin',
        'APP_ADMIN_PASSWORD' => 'adminpsswd',

        // Database's Info
        'DB_NAME' => 'ehosp',
        'DB_HOSTNAME' => '127.0.0.1',
        'DB_PORT' => '3306',
        'DB_ROOT_USERNAME' => 'root',
        'DB_ROOT_PASSWORD' => 'rootpsswd',

        // Raspberry Pi's Info
        'RASPBERRYPI_HOSTNAME' => '192.168.1.2',
        'RASPBERRYPI_PORT' => '8080/hardware/src',

        // Technical details
        'remember' => array(
            'cookie_name' => 'hash',
            'cookie_expiry' => 604800
        ),
        'session' => array(
            'session_name' => 'user',
            'token_name' => 'token'
        )
    );

    return $CONFIG;
?>
