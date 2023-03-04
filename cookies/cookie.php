<?php

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_STRING);
$duration = time() + (60*2);

$data["name"] = $name;
$data["pass"] = $pass;

setcookie("login", serialize($data), $duration);

header("location:welcome.php");

?>