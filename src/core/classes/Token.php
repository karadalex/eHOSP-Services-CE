<?php

// Code for CSRF Protection
class Token {
    public static function generate() {
        return Session::put(config_get::get('session/token_name'), md5(uniqid()));
    }

    public static function check($token) {
        $tokenName = config_get::get('session/token_name');

        if (Session::exists($tokenName) && $token === Session::get($tokenName)) {
            Session::delete($tokenName);
            return true;
        }

        return false;
    }
}
