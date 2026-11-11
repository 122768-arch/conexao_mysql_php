<?php

include "conecta.php";

$sql = "SELECT * FROM aluno";
$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
</head>
<body>

    <h1>Alunos cadastrados</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
        </tr>

        <?php
        while ($aluno = $resultado->fetch_assoc()) {
        ?>

        <tr>
            <td><?php echo $aluno["id"]; ?></td>
            <td><?php echo $aluno["nome"]; ?></td>
            <td><?php echo $aluno["cpf"]; ?></td>
        </tr>

        <?php
        }
        ?>

    </table>

    <p><a href="index.php">Voltar ao login</a></p>

</body>
</html>
