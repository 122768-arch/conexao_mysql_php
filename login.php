<?php

include "conecta.php";

$cpf = $_POST["cpf"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM aluno WHERE cpf = ? AND senha = ?";

$consulta = $conexao->prepare($sql);
$consulta->bind_param("ss", $cpf, $senha);
$consulta->execute();

$resultado = $consulta->get_result();

if ($resultado->num_rows > 0) {
    echo "Login realizado com sucesso!";
    echo "<p><a href='lista.php'>Ver lista de alunos</a></p>";
} else {
    echo "CPF ou senha incorretos!";
}

?>
