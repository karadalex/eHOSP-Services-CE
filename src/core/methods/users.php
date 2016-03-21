<?php
    // Check if user exists, i.e. they are already registered in the database:
    // (needs improvement as it is vulnerable to SQL injection)
    function user_exists($username) {
        $username = sanitize($username);
        $query = mysqli_query("SELECT COUNT(`user_id`) FROM `user_registry` WHERE `username` = '$username'");
        return (mysqli_result($query, 0) == 1) ? true : false;
    }
?>
