<?php

class Session {

    public static function start() {
        session_start();
    }

    public static function stop() {
        session_destroy();
    }

    public static function delete($key) {
        unset($_SESSION[$key]);
    }

    public static function saveValue($variable, $value) {
        $_SESSION[$variable] = $value;
    }

    public static function getValue($variable) {
        return isset($_SESSION[$variable])? $_SESSION[$variable] : false;
    }

}
