<?php

namespace classes;

class Regioni {
    
    private $regioni = [
        'Campania','Lazio','Lombardia'
    ];

    private $province = [
        'Campania' => ['Napoli','Caserta','Benevento'],
        'Lazio' => ['Roma','Nettuno','Olvieto'],
    ];
   
    public function getRegioni()
    {
        return $this->regioni;
    }

    public function getProvince($province = null)
    {   
        return $this->province[$province];
    }
  
    public function ChekRegioni($regioni = null, $province = null)
    {   
        
        $flag = false;
        
        for ($i=0; $i < count($this->province[$regioni]) ; $i++) { 
              
            if($this->province[$regioni][$i] == $province) {

                $flag = true; 
            }
        }
        
        return $flag;
    }

    

}
