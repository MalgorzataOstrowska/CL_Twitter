<?php

    function __autoload($className)
    {
        include_once '../src/class/'.$className.'.php';
    }
    
    // Creation of a new connection:
    $connection = new Connection();

    $user = new User();
    
    POST_function($connection, $user);
    
    function POST_function(Connection $connection, User $user) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['email']) && isset($_POST['password'])) {

                $email = trim($_POST['email']);
                $password = trim($_POST['password']);

                $user->logIn($connection, $email, $password);
            } else {
                echo 'Missing data';
            }
        }
    }

?>




<?php
// Destruction of the connection:
$connection->close();
$connection = null;
?>