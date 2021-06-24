<?php

class Student extends Database {
    public static function getStudentByEmail($email) {
        // query is a static function (in the parent class) so self:: must be used
        $res = self::query("SELECT * FROM student WHERE email='$email'")[0];
        return $res;
    }
    public static function getStudentByUID($uid) {
        $res = self::query("SELECT * FROM student WHERE uid=$uid")[0];
        return $res;
    }

    public static function addStudent($name, $email, $pswd) {
        self::query("INSERT INTO student (name, email, password) VALUES ('$name', '$email', '$pswd')");
    }
}