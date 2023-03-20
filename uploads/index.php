<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Upload de Arquivos</h1>
    <div class="message">
        <?php 
            $msg = filter_input(INPUT_GET, "message", FILTER_SANITIZE_STRING);
            if($msg) {
                echo "<h2>$msg</h2>";
            }
        ?>
    </div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Escolha sua imagem</label>
        <input type="file" name="file" id="file"                                 accept="application/pdf, image/jpeg, image/png">
        <input type="submit" value="Enviar">
    </form>
        <h3>Suas imagens</h3>
    <form action="delete.php" method="post" style="border:none">
        <div class="gallery">
        <?php 
            $dir = opendir(".\\imgs");
            while(($file = readdir($dir)) != false) {
                if(filetype(".\\imgs\\" . $file) == "file") {
                    echo "<div class='card'> <img src='.\\imgs\\$file' width='200' /> <input type='checkbox' name='img[]' value='$file'> </div>";
                }
            }
        closedir($dir);
        ?>
        </div>
        <input type="submit" value="Excluir imagens selecionadas">
    </form>
</body>
</html>