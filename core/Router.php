<?php

namespace app\core;
class Router{

    static public $routes = [];

    static public function get(string $path, callable $callable){
        self::$routes['GET'][$path] = $callable;
    }

}