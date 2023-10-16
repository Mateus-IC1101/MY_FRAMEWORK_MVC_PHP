<?php

declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use app\core\Aplication;
use app\core\Router;

require_once __DIR__.'/vendor/autoload.php';

include 'routes/web.php';
// include_once 'config/config.php';

foreach($_SERVER as $key => $item){
    print_r("{$key} => {$item} <br>");
}

$app = new Aplication();


$routers_test = new Router();
var_dump($routers_test::$routes['GET']);

