<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Secure Accounts: Register</title>
        <meta name="description" content="A simple and modern php login framework with data-filtering and encryption.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/icons/icon.png">

        <!-- Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">

        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="css/vendor/normalize.css" />
        <link type="text/css" rel="stylesheet" href="css/main.css" />

        <!-- JS -->
        <script type="text/JavaScript" src="js/vendor/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
        <div class="grid-container">
            <div class="grid-item">
                <!-- Registration form to be output if the POST variables are not set or if the registration script caused an error. -->
                <h1>Register with us</h1>
                <?php
                if (!empty($error_msg))
                {
                    echo $error_msg;
                }
                ?>
            </div>
            <div class="grid-item">
                <ul class="center">
                    <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
                    <li>Emails must have a valid email format</li>
                    <li>Passwords must be at least 6 characters long</li>
                    <li>Passwords must contain
                        <ul>
                            <li>At least one upper case letter (A..Z)</li>
                            <li>At least one lower case letter (a..z)</li>
                            <li>At least one number (0..9)</li>
                        </ul>
                    </li>
                    <li>Your password and confirmation must match exactly</li>
                </ul>
            </div>
            <div class="grid-item">
                <div class="box s2 center">
                    <h3>Register</h3>
                    <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
                        <input type='text' name='username' id='username' placeholder="Username" required autofocus>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <input type="password" name="confirmpwd" id="confirmpwd" placeholder="Confirm password" required>
                        <input type="submit" value="Register" onclick="return regformhash(this.form, this.form.username, this.form.email, this.form.password, this.form.confirmpwd);"> 
                    </form>
                </div>
                <p>Return to the <a href="index.php">login page</a>.</p>
            </div>
        </div>
    </body>
</html>