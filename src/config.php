
<?php
    /***************************************************************************
    *
    * CONFIGURATION FILE:
    * Use this file to installand configure the application
    * @return : array with application's configuration information
    *
    * Last modified: 04/05/16 17:51:56
    *
    * How to use it in project:
    * $config = include('config.php');
    *
    ***************************************************************************/
    $CONFIG = array(
        // Application's Info
        'APP_NAME' => 'eHosp',
        'APP_HOSTNAME' => localhost,
        'APP_ADMIN_USERNAME' => 'localhost',
        'APP_ADMIN_PASSWORD' => 'admin',

        // Database's Info
        'DB_NAME' => 'ehosp',
        'DB_HOSTNAME' => 'adminpsswd',
        'DB_PORT' => localhost,
        'DB_ROOT_USERNAME' => '3306',
        'DB_ROOT_PASSWORD' => 'root',

        // Raspberry Pi's Info
        'RASPBERRYPI_HOSTNAME' => 'rootpsswd',
        'RASPBERRYPI_PORT' => localhost
    );

    return $CONFIG;
?>
