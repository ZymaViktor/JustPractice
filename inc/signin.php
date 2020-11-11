<?php 
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$check_users = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

if (mysqli_fetch_assoc($check_users) > 0) {
    $user = mysqli_fetch_assoc($check_users);
    $_SESSION["user"] = [
        "id" => $user["id"],
        "full_name" => $user["full_name"],
        "avatar" => $user["avatar"],
        "email" => $user["email"]
    ];

    header("Location: ../profile.php");

} else {
    $_SESSION["massage"] = "Not correct login or password";
    header("Location: ../index.php");
}