<?php
require "vendor/autoload.php";

use app\Core\Application;

$app = new Application();

$app->router->get('/', function(){
    return 'Home page';
});
$app->router->get('/fruits', function(){
    return 'here is fruits list';
});

$app->run();
