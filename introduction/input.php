<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Calculadora</h1>
    <form action="calcular.php">
        <p>Número 1:</p>
        <input type="number" name="n1"> <br>
        <p>Número 2:</p>
        <input type="number" name="n2"> <br>
        <p>Operação:</p>
        <input type="radio" name="op" value="+"> Mais <br>
        <input type="radio" name="op" value="-"> Menos <br>
        <input type="radio" name="op" value="*"> Vezes <br>
        <input type="radio" name="op" value="/"> Dividir <br>
        <input type="submit" value="calcular">
    </form>
</body>
</html>