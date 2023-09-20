<?php

namespace Lukas\Autoservices\Connection;

class Connection
{

    private static $instance;

    private function __construct()
    {}

    public static function getInstance()
    {
        try{
            self::$instance = new \PDO("mysql:host=localhost;dbname=autoservices_db", "root", "root");
            self::$instance->setAttribute(\PDO::ERRMODE_EXCEPTION, \PDO::ATTR_ERRMODE);
            return self::$instance;
        } catch (\PDOException $pdoEx){
            die($pdoEx->getMessage());
        }
    }
}