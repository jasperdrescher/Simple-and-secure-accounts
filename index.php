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
        <link rel="shortcut icon" href="images/icons/icon.png">

        <!-- Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="css/vendor/normalize.css" />
        <link type="text/css" rel="stylesheet" href="css/main.css" />

        <!-- JS -->
        <script type="text/JavaScript" src="js/vendor/sha512.js"></script>
        <script type="text/JavaScript" src="js/forms.js" defer></script>
    </head>
    <body>
        <?php
            if (isset($_GET['error'])) {
                echo '<p class="error">Error Logging In!</p>';
            }
        ?>

        <form action="includes/process_login.php" method="post" name="login_form">
            <h1>Sign in</h1>
            <section>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="name@email.com" autocomplete="username" maxlength="50" required autofocus>
                <span></span>
            </section>
            <section>
                <label for="current-password">Password</label>
                <input type="password" name="current-password" id="current-password" placeholder="password" maxlength="128" autocomplete="current-password" aria-describedby="password-constraints" required>
                <span></span>
                <button id="toggle-password" type="button" aria-label="Show password as plain text. Warning: this will display your password on the screen.">Show password</button>
                <div id="password-constraints">A password with a length between 80 and 128 characters, with at least one lowercase and uppercase letter.</div>
                </section>
            <section>
                <span>Remember me </span><input type="checkbox" name="remember" id="remember" value="Remember me" disabled>
                <button id="signin" onclick="formhash(this.form, this.form.current-password);">Sign in</button>
            </section>
        </form>

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
    </body>
</html>