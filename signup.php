<?php
    include_once 'library.php';
    
    // Creation of a new connection:
    $connection = new Connection();

    $user = new User();

    POST_function($connection, $user);

    function POST_function(Connection $connection, User $user) {
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
?>


<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Sign Up Form</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
        
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

        <link rel="stylesheet" href="css/signup_login.css">
    </head>

    <body>
        <?php include "src/navbar.html"; ?>

        <div class="form">

            <ul class="tab-group">
                <li class="tab active"><a href="#signup">Sign Up</a></li>
                <li><a href="login.php">Log In</a></li>
            </ul>


            <div id="signup">   
                <h1>Sign Up for Free</h1>

                <form action="#" method="post">

                    <div class="field-wrap">
                        <label>
                            Username<span class="req">*</span>
                        </label>
                        <input type="text"required autocomplete="off" name="username"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email"required autocomplete="off" name="email"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Set A Password<span class="req">*</span>
                        </label>
                        <input type="password"required autocomplete="off" name="password"/>
                    </div>

                    <button type="submit" class="button button-block"/>Get Started</button>

                </form>
            </div>
        </div> <!-- /form -->
    </body>
    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
    crossorigin="anonymous"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/signup_login.js"></script>
</html>

<?php
// Destruction of the connection:
$connection->close();
$connection = null;
?>