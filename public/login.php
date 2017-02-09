<?php
session_start();
require_once 'autoload.php';
require_once 'connection.php';

$user = new User();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    POST_function($connection, $user, $_POST);
}

if (isset($_SESSION['logged']) && $_SESSION['logged']) {
    $view = new View('view/layout.html', ['CONTENT']);
    $view->replace('CONTENT', new View('logged.html'));
    
    echo $view;
    $_SESSION['logged'] = false;
} else {
    $view = new View('login.html', ['ERROR']);
    $view->replace('ERROR', "Incorrect Email Address or Password");
    echo $view;
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

        echo $login = $user->logIn($connection, $email, $password);
        
        if($login==true){
            echo 'Success';
            $_SESSION['logged'] = true;
            header('Location: ./login.php');
        } else {
            echo 'Incorrect Email Address or Password';    
            $_SESSION['logged'] = false;    
            header('Location: ./login.php');
            
//            header('login: false'); 
//            header('Location: ./login.html');
//            header('data: false');
        }
        
        
    } else {
        echo 'Missing data';
    }
}
