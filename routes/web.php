<?php

use app\core\Router;

Router::get('/home', function(){
    return 'oi';
});

Router::get('/users', function(){
    return 'ola';
});