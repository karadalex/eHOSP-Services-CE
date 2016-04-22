<?php 
require_once '../core/init.php';
if(Input::exists()) {
	echo Input::get('username');
}
?>


/*********************************************************************************
* Testing Input class
*
*********************************************************************************/
<form action="" method="post">
	<input type="text" name="username">
	<input type="submit" value="Register">
</form>