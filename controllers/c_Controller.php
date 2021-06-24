<?php

class Controller {
    public static function createView($view) {
        $values = static::run();
        if($values)
            extract($values);
        require_once "./views/v_$view.php";
    }
}