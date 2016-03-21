<?php
    function sanitize($data) {
        return mysqli_real_escape_string($data);
    }
?>
