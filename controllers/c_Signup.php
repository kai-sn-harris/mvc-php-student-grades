<?php

class Signup extends Controller {
    public static function signUpStudent() {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $pswd = $_POST["password"];
        // check if email is taken
        if(Student::getStudentByEmail($email)) {
            $_SESSION["email-in-use"] = true;
            header("Location: signup");
            exit();
        }
        $_SESSION["email-in-use"] = false;
        Student::addStudent($name, $email, $pswd);
        header("Location: login");
        exit();
    }
    public static function run() {}
}