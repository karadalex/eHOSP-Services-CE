config_file = open("../../config.php", w)

config_file_content = '''
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
        'APP_HOSTNAME' => '{APP_HOSTNAME}',
        'APP_ADMIN_USERNAME' => '{APP_ADMIN_USERNAME}',
        'APP_ADMIN_PASSWORD' => '{APP_ADMIN_PASSWORD}',

        // Database's Info
        'DB_NAME' => 'ehosp',
        'DB_HOSTNAME' => '{DB_HOSTNAME}',
        'DB_PORT' => {DB_PORT},
        'DB_ROOT_USERNAME' => '{DB_ROOT_USERNAME}',
        'DB_ROOT_PASSWORD' => '{DB_ROOT_PASSWORD}',

        // Raspberry Pi's Info
        'RASPBERRYPI_HOSTNAME' => '{RASPBERRYPI_HOSTNAME}',
        'RASPBERRYPI_PORT' => {RASPBERRYPI_PORT}
    );

    return $CONFIG;
?>
'''


config_file.close()