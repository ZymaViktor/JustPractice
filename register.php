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

        <!-- Registration form -->
    
    <form action="inc/signup.php" method="POST" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" type="" placeholder="ФИО">
        <label>Login</label>
        <input type="text" name="login" type="" placeholder="Username">
        <label>Email</label>
        <input type="email" name="email" type="" placeholder="Email">
        <label>Your profile image</label>
        <input type="file" name="avatar">
        <label>Password</label>
        <input type="password" name="password" type="" placeholder="Password">
        <label>Retry password</label>
        <input type="password" name="password_confirm" type="" placeholder="Retry password">
        <button class="btn btn-lg btn-primary btn-block">Enter</button>
        <p>
            Are you have account? - <a href="/index.php">Authorization</a>!
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