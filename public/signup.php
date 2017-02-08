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

header('Location: ./signup.html');

function POST_function(Connection $connection, User $user, $postData)
{
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {

        $newUsername = trim($_POST['username']);
        $newEmail = trim($_POST['email']);
        $newPassword = trim($_POST['password']);

        $user->signUp($connection, $newUsername, $newEmail, $newPassword);
    } else {
        echo 'Missing data';
    }
}
