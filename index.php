<?php

session_start();

if(!isset($_SESSION["inc-info"]))
    $_SESSION["inc-info"] = false;

spl_autoload_register(function($className) {
    if(file_exists("./classes/$className.php"))
        require_once "./classes/$className.php";
    else if(file_exists("./controllers/c_$className.php"))
        require_once "./controllers/c_$className.php";
    else if(file_exists("./models/m_$className.php"))
        require_once "./models/m_$className.php";
});

require_once "routes.php";


// HANDLE FORMS
if(isset($_POST["login"]))
    Login::loginStudent();

if(isset($_POST["log_out"]))
    // using dasboard here because the login button is on the dashboard page
    Dashboard::logoutStudent();

if(isset($_POST["sign_up"]))
    Signup::signupStudent();