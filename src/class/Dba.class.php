<?php

abstract class Dba{
    protected function connect($database){
        $dsn="mysql:host=".$database["host"].";dbname=".$database["dbname"];
        $pdo=new PDO($dsn,$database["user"],$database["password"]);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}