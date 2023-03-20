<?php
session_start();
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_ENCODED);

if($email == "micael@email.com" && $pass == "a") {
    $_SESSION["email"] = $email;
    $_SESSION["type"] = "adm";
} else {
    unset($_SESSION["email"]);
    unset($_SESSION["type"]);
}
    header("Location:start.php");