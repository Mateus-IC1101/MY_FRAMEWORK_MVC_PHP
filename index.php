<?php

use app\core\Aplication;

require_once __DIR__.'/vendor/autoload.php';

foreach($_SERVER as $key => $item){
    print_r("{$key} => {$item} <br>");
}

$app = new Aplication();