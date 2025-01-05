<?php
require_once __DIR__.'/vendor/autoload.php';
use app\core\Application;
echo "Fdas";
exit;
$app = new Application();

//$app->router->get('/', function (){
//    return "Hello world";
//});

$app->run();