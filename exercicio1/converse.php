<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua temperatura convertida</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include_once './functions.php';
        $num = filter_input(INPUT_POST, 'temperature', FILTER_VALIDATE_FLOAT);
        $op = $_REQUEST['convert'];
        $result;
        $from;
        $to;
        $source;

        switch($op) {
            case 'c2f':
                $conversion = c2f($num);
                $from = "ºC";
                $to = "ºF";
                break;
            case 'c2k':
                $conversion = c2k($num);
                $from = "ºC";
                $to = " K";
                break;
            case 'f2c':
                $conversion = f2c($num);
                $from = "ºF";
                $to = "ºC";
                break;
            case 'f2k':
                $conversion = f2k($num);
                $from = "ºF";
                $to = " K";
                break;
            case 'k2c':
                $conversion = k2c($num);
                $from = " K";
                $to = "ºC";
                break;
            case 'k2f':
                $conversion = k2f($num);
                $from = " K";
                $to = "ºF";
                break;
            default:
                $conversion = "Não foi possível converter";
                $from = "";
                $to = "";
                break;
        }

        if($conversion < 1) {
        $source = "https://cdn-icons-png.flaticon.com/512/2322/2322701.png";
        } else {
         $source = "https://cdn-icons-png.flaticon.com/512/1684/1684375.png";
        }    

        echo "<img src='$source' width='128'\>";
        echo "<h1>Temperatura convertida!</h1>";
        echo "<h2>$num $from = $conversion $to</h2>";
    ?>
</body>
</html>