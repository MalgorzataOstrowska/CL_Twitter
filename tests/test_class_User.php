<?php

    function __autoload($className)
    {
        include_once '../src/class/'.$className.'.php';
    }
    
    // Creation of a new connection:
    $connection = new Connection();

    
//    // class User test
//    $user = new User();
//    $user->setUsername('gosia');
//    $user->setEmail('gosia@gmail.com');
//    $user->setPassword('gosiaPassword');
//    $user->saveToDB($connection);
    
//    $user = new User();
//    $user->setUsername('gosia21');
//    $user->setEmail('gosia21@gmail.com');
//    $user->setPassword('gosiaPassword');
//    $user->saveToDB($connection);
    
//    // loadUserById test
//    var_dump(User::loadUserById($connection,40));

//    // loadAllUsers test
//    var_dump(User::loadAllUsers($connection));
    
//    // saveToDB update test
//    $user = User::loadUserById($connection,40);
//    var_dump($user);
//    $user->setUsername('gosia9');  
//    $user->saveToDB($connection);
//    var_dump($user);    

    // delete test
    $user = User::loadUserById($connection,58);
    var_dump($user);
    if (!is_null($user)) {
        $user->delete($connection);
        var_dump($user);
    }
         
    // Destruction of the connection:
    $connection->close();
    $connection = null; 
?>