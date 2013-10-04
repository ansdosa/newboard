<?php


class Session {

    public static function init() {
        session_name('sid');
        session_start();
    }

    public static function set($key, $value) {
        if (is_array($key)) {
           foreach($key as $key1=>$value1) {
               $_SESSION[$key1] = $value1;
           }
        } else {
            $_SESSION[$key] = $value;
        }
    }

    public static function get($key) {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : false;
    }

    public static function delete($key) {
        unset($_SESSION[$key]);
    }

    public function destroy() {
        session_destroy();
    }
}