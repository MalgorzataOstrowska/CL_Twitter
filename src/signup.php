<?php

    function __autoload($className)
    {
        include_once '../src/class/'.$className.'.php';
    }


    // Creation of a new connection:
    $connection = new Connection();

    $user = new User();

    POST_function($connection, $user);

    // Destruction of the connection:
    $connection->close();
    $connection = null;   
    
    header('Location: ../public/signup.html');
    
    
    function POST_function(Connection $connection, User $user) 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

                $newUsername = trim($_POST['username']);
                $newEmail = trim($_POST['email']);
                $newPassword = trim($_POST['password']);

                $user->signUp($connection, $newUsername, $newEmail, $newPassword);
            } else {
                echo 'Missing data';
            }
        }
    }
