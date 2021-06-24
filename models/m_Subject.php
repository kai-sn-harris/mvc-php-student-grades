<?php

class Subject extends Database {
    public static function getSubjectByStudentUID($id) {
        $res = self::query("SELECT * FROM subject WHERE student_uid=$id");
        return $res;
    }

    public static function addSubject($name, $grade, $uid) {
        self::query("INSERT INTO subject (name, grade, student_uid) VALUES ('$name', $grade, $uid)");
    }
}