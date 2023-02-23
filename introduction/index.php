<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "Olá mundo! <br>";
        $name = "Micael";
        echo "Bom dia, $name <br>";

        $vetor[0] = "Micael";
        $vetor[1] = 171;
        $vetor["Cor"] = "Azul";

        echo var_dump($vetor);
        echo "<br> SEU VETOR: <br>";
        foreach($vetor as $indice => $valor) {
            echo "$indice: $valor <br>";
        }
        ?>
        <a href="input.php">Calculadora</a>
    </body>
</html>
