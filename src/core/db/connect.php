<?php
    $MYSQL_ROOT_PASSWORD = 'rootpsswd'
    // For debugging purposes, not to be used in production:
    // mysql_connect('localhost', 'root', $MYSQL_ROOT_PASSWORD) or die(mysql_error());
    mysql_connect('localhost', 'root', $MYSQL_ROOT_PASSWORD);
    mysql_select_db();
?>
