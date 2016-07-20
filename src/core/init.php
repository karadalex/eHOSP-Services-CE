<?php
//Set HTTP Headers - In case that they are not configured by the server
if ($_SERVER["SERVER_PORT"] != 8443) {
    $redir = "Location: https://" . $_SERVER['HTTP_HOST'] . ":" . "8443" . $_SERVER['PHP_SELF'];
    header($redir);
}
header('X-Powered-By: ');
header('Server: ');
header('X-Content-Type-Options: nosniff');
header('X-XSS-Protection: 1; mode=block');
// header("Content-Security-Policy: script-src 'self'");
//header('X-Frame-Options: SAMEORIGIN');

session_start();
error_reporting(0);

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
require_once 'methods/generators.php';
require_once 'methods/paths.php';

// Global Data and Variables
require_once 'data/userTypes.php';

if (Cookie::exists(config_get::get('remember/cookie_name')) && !Session::exists(config_get::get('session/session_name'))) {
    $hash = Cookie::get(config_get::get('remember/cookie_name'));
    $hashCheck = DB::getInstance()->get('user_sessions', array('hash', '=', $hash));

    if ($hashCheck->count()) {
        $user = new User($hashCheck->first()->user_id);
        $user->login();
    }
}
