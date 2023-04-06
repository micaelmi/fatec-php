<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão com Banco de Dados</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <main class="container">
        <h1>Lista de Alunos</h1>
        <table>
            <tr>
                <th>RA</th>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Sexo</th>
            </tr>
            <?php
            include_once './functions/db.php';
            $test = connection();
            // echo var_dump($test);
            $sql = "SELECT * FROM aluno order by Nome asc";
            $result = $test->query($sql);

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr>
                    <td><?= $row["RA"] ?></td>
                    <td><?= $row["nome"] ?></td>
                    <td><?= dateBR($row["nascimento"]) ?></td>
                    <td><?= $row["cpf"] ?></td>
                    <td><?= $row["rg"] ?></td>
                    <td><?= $row["sexo"] ?></td>
                </tr>
            <?php
            }
            $row = null;
            $test = null;
            ?>
        </table>
    </main>
</body>

</html>