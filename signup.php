<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Sign Up Form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>        

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

                <form action="/" method="post">

                    <div class="field-wrap">
                        <label>
                            Username<span class="req">*</span>
                        </label>
                        <input type="text"required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email"required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Set A Password<span class="req">*</span>
                        </label>
                        <input type="password"required autocomplete="off"/>
                    </div>

                    <button type="submit" class="button button-block"/>Get Started</button>

                </form>
            </div>
        </div> <!-- /form -->
    </body>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/signup_login.js"></script>
</html>