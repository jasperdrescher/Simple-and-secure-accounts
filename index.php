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
        <link rel="shortcut icon" href="images/icon.png">

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
                <div class="box s2 center">
                    <h3>Log in</h3>
                    <form action="includes/process_login.php" method="post" name="login_form">
                        <input type="email" name="email" placeholder="Email" maxlength="50" required autofocus>
                        <input type="password" name="password" id="password" placeholder="Password" maxlength="128" required>
                        <span>Remember me </span><input type="checkbox" name="remember" id="remember" value="Remember me" disabled>
                        <input type="submit" value="Login" onclick="formhash(this.form, this.form.password);">
                    </form>
                </div>
            </div>
            <div class="grid-item">
                <?php
                    if (login_check($mysqli) == true)
                    {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
                        echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
                    }
                    else
                    {
                        echo '<p>Currently logged ' . $logged . '.</p>';
                        echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>