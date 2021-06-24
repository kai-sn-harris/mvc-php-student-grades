<?php

class Database {
    public static $host = "localhost";
    public static $username = "root";
    public static $password = "root";
    public static $dbName = "student_manager";

    public static function connect() {
        return mysqli_connect(self::$host, self::$username, self::$password, self::$dbName);
    }

    public static function query($query) {
        // $this referes to the current object whereas self:: refers to the current class
        // $this for non static members and self:: for static members
        $res = mysqli_query(self::connect(), $query);
        // retrieving data not just uploading so should return the data
        if(explode(" ", $query)[0] == "SELECT") {
            $data = array();
            foreach($res as $r)
                array_push($data, $r);
            return $data;
        }
    }
}