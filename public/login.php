<?php

require_once 'autoload.php';
require_once 'connection.php';

$user = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    POST_function($connection, $user, $_POST);
}


// Destruction of the connection:
$connection->close();
$connection = null;

//header('Location: login.html');


function POST_function(Connection $connection, User $user, $postData)
{
    if (isset($postData['email']) && isset($postData['password'])) {

        $email = trim($postData['email']);
        $password = trim($postData['password']);

        $user->logIn($connection, $email, $password);
    } else {
        echo 'Missing data';
    }
}
