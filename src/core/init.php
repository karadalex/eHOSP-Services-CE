<?php
    $app_config = include('../config.php');
    $GLOBALS['errors'] = array();
    $GLOBALS['config'] = $app_config;

    // Autoload required php files
    spl_autoload_register(function($class) {
        require_once 'classes/' . $class . '.php';
    });

    require_once 'methods/sanitize.php';
