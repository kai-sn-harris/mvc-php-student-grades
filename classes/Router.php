<?php

class Router {
    public static $validRoutes = array();
    
    public static function set($route, $func) {
        array_push(self::$validRoutes, $route);
        array_push(self::$validRoutes, $route."/");
        if($_GET["url"] == $route || $_GET["url"] == $route."/")
            $func();
    }
}