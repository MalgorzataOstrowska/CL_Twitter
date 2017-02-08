<?php

    require_once 'autoload.php';
    require_once 'connection.php';

    
    // Destruction of the connection:
    $connection->close();
    $connection = null; 
?>