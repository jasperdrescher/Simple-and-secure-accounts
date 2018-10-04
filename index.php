<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true)
{
    $logged = 'in';
}
else
{
    $logged = 'out';
}
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Secure Accounts</title>
        <meta name="description" content="A simple and modern php login framework with data-filtering and encryption.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="icon.png">

        <!-- Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="css/normalize.css" />
        <link type="text/css" rel="stylesheet" href="css/main.css" />

        <!-- JS -->
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?>

        <div class="grid-container">
            <div class="grid-item">
                <form class="medium-form center" action="includes/process_login.php" method="post" name="login_form"> 			
                    Email: <input type="text" name="email" />
                    Password: <input type="password" name="password" id="password"/>
                    <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" /> 
                </form>
            </div>
            <div class="grid-item">
                <p>If you don't have a login, please <a href="register.php">register</a></p>
                <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
                <p>You are currently logged <?php echo $logged ?> 
                <?php 
                if (login_check($mysqli) == true)
                {
                    echo ' as ' . htmlentities($_SESSION['username']);
                }
                ?>.</p>
            </div>
        </div>
    </body>
</html>