<?php

    include_once 'library.php';    
    // Creation of a new connection:
    $connection = new Connection();

    
    // class User test
//    $user = new User();
//    $user->setUsername('gosia');
//    $user->setEmail('gosia@gmail.com');
//    $user->setPassword('gosiaPassword');
//    $user->saveToDB($connection);
    
//    $user = new User();
//    $user->setUsername('gosia');
//    $user->setEmail('gosia12@gmail.com');
//    $user->setPassword('gosiaPassword');
//    $user->saveToDB($connection);
    
    // loadUserById test
    var_dump(User::loadUserById($connection,40));
    
    // loadAllUsers test
    var_dump(User::loadAllUsers($connection));
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