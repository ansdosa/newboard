<?php
define('H', __DIR__ . '/');

include_once H . 'core/init.php';

$r = new Route();
echo $r->route();

try {
    $db = new _PDO('mysql:host=localhost;dbname=test', 'root', '');
    $db->query("SELECT 1+1");
} catch (PDOException $e) {
    echo $e->getTraceAsString();
}

Template::set('string', 'Hello, World!');
Template::render('index/index');
