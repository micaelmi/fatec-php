<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/main.js"></script>
</head>
<body>
    <?php 
        // if(isset($_COOKIE["login"])) {
        //     $name = $_COOKIE["login"];
        // } else {
        //     $name = "internauta";
        // }
        // echo var_dump($_COOKIE);
            $name = "internauta";
    ?>
    <h2>Olá <?= $name ?></h2>
    <h3>Entre para continuar</h3>
    <form action="cookie.php" method="post">
        <h1>Login</h1>
        <input type="text" id="name" name="name" placeholder="Digite seu nome">
        <input type="password" id="pass" name="pass" placeholder="Digite sua senha">
        <input type="submit" id="login" name="login" disabled value="Entrar">
    </form>
</body>
</html>