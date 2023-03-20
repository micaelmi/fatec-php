<?php
    session_start();
    if(isset($_COOKIE["PHPSESSID"])) {
        echo "session OK";
        if(isset($_SESSION["email"])) {
            echo "email OK";
            header("Location:welcome.php");
        die();
        }
    }
    header("Location:index.php");
?>