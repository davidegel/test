<?php

namespace classes;

class User {
    
    private $db;
    protected $stmt;

    public function __construct($db)
    {
        # code...
        //echo strtolower(__CLASS__);
        $this->db = $db;
    }

    public function getUser() {
        
        $sql = "SELECT * FROM user";
        $this->stmt = $this->db->query($sql);
        
        $box = [];

        while ($row = $this->stmt->fetch()) {
               
              $box[] = [
              
                'email' => $row['email'],
                'username' => $row['username']

              ];
              
        }
         
         header('Content-Type: application/json');
         echo json_encode($box); 

    }
}


?>