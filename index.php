<?php
define('ROOT', __DIR__ . '/');

include_once ROOT . 'core/init.php';

$profiler = Profiler::getInstanse();

$r = new Route();
echo $r->route();

try {
    $db = new DB('mysql:host=localhost;dbname=test', 'root', '');
    $db->query("SELECT 1+1");
} catch (PDOException $e) {
    echo $e->getTraceAsString();
}


$t = new Template();
$t->set(array(
    'string' => "Hello, World!",
    'profiler' => $profiler
));
$t->render('index/index');
