<?php

    include_once 'library.php';    
    // Creation of a new connection:
    $connection = new Connection();
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Twitter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>


    </body>
</html>

<?php 
    // Destruction of the connection:
    $connection->close();
    $connection = null; 
?>