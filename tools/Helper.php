<?php
namespace tools;

use PDO;
use tools\AbHelper;

class Helper extends AbHelper {

    public function __construct(PDO $db)
    {  
        parent::__construct($db);
        # code...
        //echo strtolower(__CLASS__);
    }

    public function getUser() {
        
        $sql = "SELECT * FROM user";
        $this->stmt = $this->db->query($sql);
        return $this->stmt;

    }


    public function getOneUser() {
        
        $value = 30;
        $sql = "SELECT * FROM user WHERE id = :id";
        $this->stmt = $this->db->prepare($sql);
        $this->stmt->bindValue(':id', $value);
        return $this->stmt->execute();      

    }

   
    public function MultipleIns() {

        $this->db->beginTransaction();
        // our SQL statements
        $this->db->exec("INSERT INTO indirizzo (via, titolo) 
        VALUES ('John', 'Doe')");
        
        $this->db->exec("INSERT INTO indirizzo (via, titolo) 
        VALUES ('fff', 'rew')");

        $this->db->exec("INSERT INTO indirizzo (via, titolo) 
        VALUES ('John', 'cadw')");

        // commit the transaction
        $this->db->commit();
        echo "New records created successfully";
    
    }


    public function OneInsert() {
        
        $sql = "INSERT INTO indirizzo (via, titolo) 
        VALUES (:via, :titolo)";
        $this->stmt = $this->db->prepare($sql);
        $this->stmt->bindParam(':via', $via);
        $this->stmt->bindParam(':titolo', $titolo);

        $via = "via verdi";
        $titolo = "pofessor mat";
        $this->stmt->execute();
        
        $via = "via verrossidi";
        $titolo = "assessore at";
        $this->stmt->execute();

        $via = "via bramisa";
        $titolo = "uberto svaiat";
        $this->stmt->execute();
        
        return $this->stmt->rowCount();
    
    }


}


?>