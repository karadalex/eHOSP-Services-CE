<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 4/4/2016
 * Time: 10:29 μμ
 */

include '../../src/core/methods/users.php';
include '../../src/core/methods/general.php';

if (user_exists("username-test-1") === true) {
    echo 'exists';
}
