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
<?php
    $n1 = $_REQUEST['n1'];
    $n2 = $_REQUEST['n2'];
    $op = $_REQUEST['op'];

    switch($op) {
        case "+":
            $result = soma($n1, $n2);
            //$result = $n1 + $n2;
            break;
        case "-":
            $result = subtracao($n1, $n2);
            //$result = $n1 - $n2;
            break;
        case "*":
            $result = multiplicacao($n1, $n2);
            //$result = $n1 * $n2;
            break;
        case "/":
            $result = divisao($n1, $n2);
            //$result = $n1 / $n2;
            break;
        default:
            $result = "Undefined";
            break;
    }

    // passagem por referência -> soma(&$num1, $num2) -> "&$num1" se refere à variável que foi chamada na função, por conta do "&"
    
    function soma($num1=0, $num2=0) {
        return $num1 + $num2;
    }

    function subtracao($num1=0, $num2=0) {
        return $num1 - $num2;
    }

    function multiplicacao($num1=0, $num2=0) {
        return $num1 * $num2;
    }

    function divisao($num1=0, $num2=0) {
        return $num2 == 0 ? "Indefinido" : $num1 / $num2;
    }

    echo "<h2>Temos seu resultado</h2>";
    echo "<h1>$n1 $op $n2 = $result</h1>";
?>
    
</body>
</html>
