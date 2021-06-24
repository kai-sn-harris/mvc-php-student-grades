<?php

class Dashboard extends Controller {
    public static function checkLoggedIn() {
        return isset($_COOKIE["uid"]);
    }
    public static function run() {
        if(!self::checkLoggedIn()) {
            header("Location: login");
            exit();
        }
        // get user info
        $uid = $_COOKIE["uid"];
        $user = Student::getStudentByUID($uid);
        // get all subjects that the user has
        $subjects = Subject::getSubjectByStudentUID($uid);
        $values = array("user" => $user, "subjects" => $subjects);
        return $values;
    }
    public static function logoutStudent() {
        unset($_COOKIE["uid"]);
        // empties value and old timestamp
        setcookie("uid", "", time() - 3600, "/");
        header("Location: login");
        exit();
    }
}