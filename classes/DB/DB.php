<?php
namespace classes\DB;
use PDO;


class DB
{
    
    protected $stmt;
    
    private static $host = "localhost";
    private static $root = "root";
    private static $password = "gelato87";
    private static $db = "cms";
    
    
    public function __construct()
    { 
         
        try {

            $this->stmt = new PDO('mysql:host='.self::$host.';dbname='.self::$db.'', self::$root, self::$password);
            // set the PDO error mode to exception
            $this->stmt->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(PDOException $e) {

            echo "Connection failed: " . $e->getMessage();

            }
        
    }

    public function getConnection()
    {
        return $this->stmt;
    }

}