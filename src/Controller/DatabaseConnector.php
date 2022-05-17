<?php
namespace Sang\Unlock\Controller;

class DatabaseConnector
{
    private static $instance = null;

    protected $connection;

    private function __construct() {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'my_database';
        $random = rand(1,9);
        echo $random;
//        $this->connection = new \mysqli($host, $username, $password, $database);
    }

    public static function getInstance(): DatabaseConnector
    {
        if (self::$instance == null) {
            self::$instance = new DatabaseConnector();
            return self::$instance;
        }
        return self::$instance;
    }
}
