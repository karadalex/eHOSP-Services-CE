<?php

// TO DO:
// Write actual test code files in ../../tests
// Use official test code as stated above to test dist directory


require_once '../core/init.php';

// Testing global variables
echo "Testing Global variables<br>";
var_dump($GLOBALS['config']);
echo config_get::get('DB_ROOT_PASSWORD');
echo "<br>";
var_dump(config_get::get('DB_HOSTNAME'));
echo "<br>";
var_dump(config_get::get('DB_NAME'));
echo "<br>";
var_dump(config_get::get('DB_ROOT_USERNAME'));
echo "<br>";
echo "<br>";

// Testing ../core/db/connect.php
// echo "Testing ../core/db/connect.php<br>";
// require_once '../core/db/connect.php';
// var_dump($mysql_connect);
echo "<br>";
echo "<br>";

// Testing db class 
// Test if it connects and whether it connects once
DB::getInstance();
DB::getInstance();

// Testing db query
// $user1 must return 'Users were found!'
$user1 = DB::getInstance()->query("SELECT username FROM user_registry");
if ($user1->error()) {
	echo 'No user found!';
} else {
	echo 'Users were found!';
}

