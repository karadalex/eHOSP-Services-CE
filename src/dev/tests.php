<?php

// TO DO:
// Write actual test code files in ../../tests
// Use official test code as stated above to test dist directory


require_once '../core/init.php';


/*********************************************************************************
* Testing global variables
*
*********************************************************************************/
echo "Testing Global variables<br>";
var_dump($GLOBALS['config']);
echo "<br>";
echo "<br>";

echo config_get::get('DB_ROOT_PASSWORD');
echo "<br>";
var_dump(config_get::get('DB_HOSTNAME'));
echo "<br>";
var_dump(config_get::get('DB_NAME'));
echo "<br>";
var_dump(config_get::get('DB_ROOT_USERNAME'));
echo "<br>";
echo "<br>";


/*********************************************************************************
* Testing ../core/db/connect.php
*
*********************************************************************************/
// echo "Testing ../core/db/connect.php<br>";
// require_once '../core/db/connect.php';
// var_dump($mysql_connect);
echo "<br>";
echo "<br>";


/*********************************************************************************
* Testing db class
*
*********************************************************************************/
// Test if it connects and whether it connects once
DB::getInstance();
DB::getInstance();


/*********************************************************************************
* Testing db query
*
*********************************************************************************/
// $user1 must return 'Users were found!'
$user1 = DB::getInstance()->query("SELECT username FROM user_registry");
if ($user1->error()) {
	echo 'No user found!<br>';
} else {
	echo 'Users were found!<br>';
}
echo "<br>";
echo "<br>";


/*********************************************************************************
* Testing get method of class
*
*********************************************************************************/
// $user2 must return Users were found!
$user2 = DB::getInstance()->get('user_registry', array('username', '=', 'alex'));
if (!$user2->count()) {
	echo 'No user found!<br>';
} else {
	echo 'Users were found!<br>';
}
// $user3 must return No user found!
$user3 = DB::getInstance()->get('user_registry', array('username', '=', 'billy'));
if (!$user3->count()) {
	echo 'No user found!<br>';
} else {
	echo 'Users were found!<br>';
}
echo "<br>";
echo "<br>";



/*********************************************************************************
* Testing results method of class; print results from query
*
*********************************************************************************/
$user4 = DB::getInstance()->get('user_registry', array('username', '=', 'alex'));
if (!$user4->count()) {
	echo 'No user found!<br>';
} else {
	foreach($user4->results() as $user) {
		echo $user->username, " ", $user->password, "<br>";
	}
}
echo "<br>";
echo "<br>";



/*********************************************************************************
* Testing insert method
*
*********************************************************************************/
// $user5 = DB::getInstance()->insert('user_registry', array(
// 	'username' => 'Dale',
// 	'password' => 'password',
// 	'salt' => 'salt'
// ));
// echo "<br>";
// echo "<br>";



/*********************************************************************************
* Testing update method
*
*********************************************************************************/
$user6 = DB::getInstance()->update('user_registry', 14, array(
	'password' => 'newnewnewnewpassword'
));
echo "<br>";
echo "<br>";
