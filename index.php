<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration and Authorization</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

        <!-- Authorization form -->
    
    <form action="inc/signin.php" method="post">
        <label>Login</label>
        <input type="text" name="login" type="" placeholder="Username">
        <label>Password</label>
        <input type="password" name="password" type="" placeholder="Password">
        <button class="btn btn-lg btn-primary btn-block">Enter</button>
        <p>
            Haven't account? - <a href="register.php">Register now</a>!
        </p>
        </p>

            <?php 
                if ($_SESSION["massage"]) {
                    echo '<p class="msg">' . $_SESSION["massage"] . '</p>';
                }
                    unset ($_SESSION["massage"]);
            ?>
    </form>
    
</body>
</html>