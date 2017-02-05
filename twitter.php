<?php

    include_once 'library.php';    
    // Creation of a new connection:
    $connection = new Connection();

    
//    // class User test
//    $user = new User();
//    $user->setUsername('gosia');
//    $user->setEmail('gosia@gmail.com');
//    $user->setPassword('gosiaPassword');
//    $user->saveToDB($connection);
    
//    $user = new User();
//    $user->setUsername('gosia');
//    $user->setEmail('gosia13@gmail.com');
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

//    // delete test
//    $user = User::loadUserById($connection,43);
//    var_dump($user);
//    if (!is_null($user)) {
//        $user->delete($connection);
//        var_dump($user);
//    }
         
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Twitter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>        
    </head>
    <body>
        <?php include "src/navbar.html"; ?>    
  
        <div class="container">
          <h3>Right Aligned Navbar</h3>
          <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
        </div>

    </body>
</html>

<?php 
    // Destruction of the connection:
    $connection->close();
    $connection = null; 
?>