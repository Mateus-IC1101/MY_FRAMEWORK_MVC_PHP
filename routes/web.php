<?php

use app\core\Router;

Router::get('/', function(){
    return 'WELCOME MATEUS DEV FRAMEWORK MVC PHP';
});

Router::get('/home', function(){
    return 'home router dynamic';
});

Router::get('/users', function(){
    echo 'users router dinamyc';
});