<?php

require_once '../core/init.php';

echo "Testing Global variables<br>";
var_dump($GLOBALS['config']);
echo config_get::get('DB_ROOT_PASSWORD');
echo "<br>";
echo "<br>";

require_once '../core/db/connect.php';
var_dump($mysql_connect);
echo "hi";

?>