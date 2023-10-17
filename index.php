<?php

declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use app\core\Aplication;

require_once __DIR__.'/vendor/autoload.php';

include 'routes/web.php';


$app = new Aplication();


$routers_test = $app->router;

$uri = $_SERVER['REQUEST_URI'];

foreach($routers_test::routes()["GET"] as $path => $callable){

    if($path === $uri){
        echo $callable();
    }
}

