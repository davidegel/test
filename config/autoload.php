<?php

function autoload($class) {

     $file = WWW_ROOT . DS . str_replace('\\', DS , $class) . '.php';
     if(!file_exists($file)) {
       throw new Exception("Error Processing Request", 1);      
     }

     include($file);
}

spl_autoload_register('autoload');

?>