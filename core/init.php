<?php
define('_START_TIME', microtime(1));
define('_IN_SYSTEM', 1);

define('TIME', time());

if (function_exists('mb_internal_encoding')) {
    mb_internal_encoding('UTF-8');
}

if (function_exists('iconv')) {
    iconv_set_encoding('internal_encoding', 'UTF-8');
}


set_include_path(
    get_include_path()
        . PATH_SEPARATOR . 'core/classes'
        . PATH_SEPARATOR . 'app/controllers'
        . PATH_SEPARATOR . 'app/models'
        . PATH_SEPARATOR . 'app/views'
);

function __autoload($class) {
    require_once $class.'.php';
}


include_once 'func.php';