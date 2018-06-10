<?php
function url() {

    $link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (strstr($link,'admin')) {
           
       return '../';
 
    }else {
 
      return '';
 
    }
 }

include(url().'config/config.php'); 
include(WWW_ROOT . DS. 'config/autoload.php'); 
?>