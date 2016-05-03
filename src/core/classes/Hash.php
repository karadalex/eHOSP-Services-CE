<?php

class Hash {
    
    public static function make($string, $salt = '') {
        return hash('sha256', $string . $salt);
    }

    public static function salt($length) {
        $result = "";
        $chars = "abcdefghijklmnopqrstuvwxyz_@#$%^&*()+={}~`?!-0123456789";
        $charArray = str_split($chars);
        for($i = 0; $i < $length; $i++){
    	    $randItem = array_rand($charArray);
    	    $result .= "".$charArray[$randItem];
        }
        return $result;
    }

    public static function unique() {
        return self::make(uniqid());
    }
}
