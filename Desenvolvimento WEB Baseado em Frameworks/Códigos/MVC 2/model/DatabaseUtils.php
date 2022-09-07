<?php
class DataBaseUtils
{
    private static $conn = NULL;

    public static function getConnection()
    {
        $nome = "max";
        $senha = "maxx";
        $db = "bd_1029";

        if (self::$conn == NULL) {
            self::$conn = new PDO("mysql:host=localhost; dbname=$db", $nome, $senha);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$conn;
    }
}
