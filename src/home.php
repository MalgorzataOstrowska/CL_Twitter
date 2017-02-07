<?php

    function __autoload($className)
    {
        include_once '../src/class/'.$className.'.php';
    }
    
    // Creation of a new connection:
    $connection = new Connection();

    
    // Destruction of the connection:
    $connection->close();
    $connection = null; 
?>