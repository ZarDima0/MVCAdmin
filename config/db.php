<?php

class DB 
{
    const USER = 'root';
    const PASS = '';
    const DNS = "mysql:dbname=mvcphp;host=localhost";

    public static function connToDB () {
        $user = self::USER;
        $pass = self::PASS;
        $dns = self::DNS;

        $conn = new PDO($dns,$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $conn;
    }
}