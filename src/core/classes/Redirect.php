<?php

class Redirect {
    public static function to($location = null) {
        if ($location) {
            // Error Redirection
            if(is_numeric($location)) {
                switch($location) {
                    // TODO: Fix 404 error page
                    case 404:
                        header('HTTP/1.1 404 Not Found');
                        chdir(dirname(__FILE__));
                        chdir('../../includes/html/errors');
                        include getcwd() . '/404.html';
                        break;
                }
            }

            // Location Redirection
            header('Location: ' . $location);
        }
    }
}
