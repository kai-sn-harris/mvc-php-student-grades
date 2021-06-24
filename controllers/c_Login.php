<?php

class Login extends Controller {
    public static function loginStudent() {
        // check if login details match those in the database
        $email = $_POST["email"];
        $password = $_POST["password"];
        // will return 1 or nothing bc emails are unique
        $user = Student::getStudentByEmail($email);
        // log the user in
        if(!$user || $user["password"] != $password) {
            $_SESSION["inc-info"] = true;
            header("Location: login");
            exit();
        }
        $_SESSION["inc-info"] = false;
        // create a cookie with a longer time if remember me is ticked
        if(isset($_POST["remember_me"]))
            // 30 mins (i think)
            setcookie("uid", $user["uid"], time()+60*30, "/", "localhost");
        else
            setcookie("uid", $user["uid"], 0, "/", "localhost");
        
        header("Location: dashboard");
        exit();
    }
    public static function run() {}
}