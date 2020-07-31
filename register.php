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
        <!-- Registration form to be output if the POST variables are not set or if the registration script caused an error. -->
        <h1>Register with us</h1>
        <?php
            if (!empty($error_msg))
            {
                echo $error_msg;
            }
        ?>
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
        <h3>Sign up</h3>
        <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
            <section>
                <label for="username">Email</label>
                <input type="text" name="username" id="username" placeholder="Joe" maxlength="50" required autofocus>
                <span></span>
            </section>
            <section>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="name@email.com" maxlength="50" required>
                <span></span>
            </section>
            <section>
                <label for="new-password">Password</label>
                <input type="password" name="new-password" id="new-password" placeholder="password" required>
                <span></span>
            </section>
            <!-- TODO: Remove confirmation and use email instead -->
            <section>
                <label for="repeat-password">Email</label>
                <input type="password" name="repeat-password" id="repeat-password" placeholder="password" required>
                <span></span>
            </section>
            <section>
                <button id="signup" onclick="return regformhash(this.form, this.form.username, this.form.email, this.form.password, this.form.repeat-password);">Sign up</button>
            </section>
        </form>
        <p>Return to the <a href="index.php">login page</a>.</p>
    </body>
</html>