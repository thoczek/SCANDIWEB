<?php

/**
 * Summary of Dba
 */
abstract class Dba{
    /**
     * Summary of connect
     * @param mixed $database
     * @return PDO
     */
    protected function connect($database){
        $dsn="mysql:host=".$database["host"].";dbname=".$database["dbname"];
        $pdo=new PDO($dsn,$database["user"],$database["password"]);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}