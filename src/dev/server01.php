<?php

if ($_SERVER['REQUEST_URI'] == "/server/src/dev/server01.php") {
    echo "Within server01.php";
} else {
    echo "Outside server01.php";
}