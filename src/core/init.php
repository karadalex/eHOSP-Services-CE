<?php
session_start();

chdir(dirname(__FILE__));
chdir('../');
$config_path = getcwd() . '/config.php';
$app_config = include($config_path);

$GLOBALS['errors'] = array();
$GLOBALS['config'] = $app_config;

// Autoload required php files from classes folder
spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});

require_once 'methods/sanitize.php';

?>
