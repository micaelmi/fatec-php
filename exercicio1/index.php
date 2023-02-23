<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <img src="https://cdn-icons-png.flaticon.com/512/2622/2622386.png" width="128"\>
    <h1>Conversor de Temperatura</h1>
    <form action="converse.php" method="post">
        <label for="temperature">Temperatura</label>
        <input type="number" value="0" id="temperature" name="temperature">
        <select name="convert" id="convert">
            <option value="c2f">ºC para ºF</option>
            <option value="c2k">ºC para K</option>
            <option value="f2c">ºF para ºC</option>
            <option value="f2k">ºF para K</option>
            <option value="k2c">K para ºC</option>
            <option value="k2f">K para ºF</option>
        </select>
        <input type="submit" value="Converter">
    </form>
</body>
</html>