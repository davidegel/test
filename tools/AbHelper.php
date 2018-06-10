<?php
namespace tools;

use PDO;

abstract class AbHelper {
    
     protected $stmt;
     protected $db;

    public function __construct(PDO $db)
    {  
        $this->db = $db;
        # code...
        //echo strtolower(__CLASS__);
    }

    abstract public function getUser();

    public function formatoWhile()
     {
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
     }

     public function formatoArry()
     {
        return $this->stmt->fetchAll();
        
     }

     public function formatoObj() {

        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
     }

     public function setMode()
     {
        return $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
     }
}


?>