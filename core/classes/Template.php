<?php


class Template {
    private static $_store = array();

    public static function set($key, $value) {
        if (is_array($key)) {
            foreach($key as $key1=>$value1) {
                self::$_store[$key1] = $value1;
            }
        } else {
            self::$_store[$key] = $value;
        }
    }

    public static function render($file) {
        $path = H.'app/views/'.$file.'.php';
        if (file_exists($path)) {
            extract(self::$_store);

            ob_start();

            include_once $path;

            $_tmp = ob_get_clean();

            require_once H.'app/views/index.php';
        } else {
            throw new Exception('Template '. $path .' not found');
        }
    }
}