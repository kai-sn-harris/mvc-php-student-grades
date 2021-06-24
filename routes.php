<?php

Router::set("login", function() {
    Login::createView("login");
});

Router::set("signup", function() {
    Signup::createView("signup");
});

Router::set("dashboard", function() {
    Dashboard::createView("dashboard");
});

if(!in_array($_GET["url"], Router::$validRoutes)) {
    echo "<h1>ERROR 404</h1>";
}