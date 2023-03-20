<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo à plataforma</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/meow-api.js"></script>
</head>
<body>
    <?php 
        if(isset($_COOKIE["login"])) {
            $data = unserialize($_COOKIE["login"]);
        } else {
            header("location:index.php");
        }
    ?>
    <img class="welcome-img" src="assets/welcome.svg" alt="Imagem de Boas Vindas" width="300">
    <h1>Bem-vindo(a) <?= $data["name"]?></h1>

    <div class="curiosity">
        <h2 id="fact"></h2>
    </div>
</body>
</html>