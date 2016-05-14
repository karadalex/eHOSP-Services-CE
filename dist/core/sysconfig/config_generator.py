import sys
import time

config_file = open("../../config.php", "w")

config_file_content = '''
<?php
    /***************************************************************************
    *
    * CONFIGURATION FILE:
    * Use this file to installand configure the application
    * @return : array with application's configuration information
    *
    * Last modified: {datetime}
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
        'DB_PORT' => '{DB_PORT}',
        'DB_ROOT_USERNAME' => '{DB_ROOT_USERNAME}',
        'DB_ROOT_PASSWORD' => '{DB_ROOT_PASSWORD}',

        // Raspberry Pi's Info
        'RASPBERRYPI_HOSTNAME' => '{RASPBERRYPI_HOSTNAME}',
        'RASPBERRYPI_PORT' => '{RASPBERRYPI_PORT}',

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
'''

config_file_content = config_file_content.format(
    datetime = time.strftime("%c"),
    APP_HOSTNAME = sys.argv[1],
    APP_ADMIN_USERNAME = sys.argv[2],
    APP_ADMIN_PASSWORD = sys.argv[3],
    DB_HOSTNAME = sys.argv[4],
    DB_PORT = sys.argv[5],
    DB_ROOT_USERNAME = sys.argv[6],
    DB_ROOT_PASSWORD = sys.argv[7],
    RASPBERRYPI_HOSTNAME = sys.argv[8],
    RASPBERRYPI_PORT = sys.argv[9]
)

config_file.write(config_file_content)
config_file.close()
