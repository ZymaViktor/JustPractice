<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>My PAGE</title>
</head>
<body>
    <form action="">
        <img src="<?= $_SESSION["user"]["avatar"] ?>" width="100" alt="">
    </form>
</body>
</html>