<?php
require_once '../core/init.php';

$user = new User(); //Current
$permissions = $user->role();

if($user->isLoggedIn()) {
	var_dump($permissions);
	if ($permissions == "admin") {
		echo "User is admin";
	}
}