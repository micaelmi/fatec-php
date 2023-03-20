<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando a Session</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        // session_start();

        // $_SESSION["SID"] = $_COOKIE["PHPSESSID"];
        // $sid = session_create_id();
        // echo var_dump($_SESSION);
        // echo var_dump($_COOKIE);
        // echo var_dump($sid);

        // session_destroy();
    ?>

    <h2>Olá,</h2>
    <h3>Entre para continuar</h3>
    <form action="login.php" method="post">
        <h1>Login</h1>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail">
        <input type="password" id="pass" name="pass" placeholder="Digite sua senha">
        <input type="submit" id="login" name="login" value="Entrar">
    </form>
</body>
</html>