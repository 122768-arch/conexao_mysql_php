
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include "conecta.php";

$cpf = $_POST["cpf"] ?? "";
$senha = $_POST["senha"] ?? "";

$sql = "SELECT id FROM aluno WHERE cpf = ? AND senha = ?";

$consulta = $conexao->prepare($sql);

if (!$consulta) {
    die("Erro na consulta: " . $conexao->error);
}

$consulta->bind_param("ss", $cpf, $senha);

if (!$consulta->execute()) {
    die("Erro ao executar: " . $consulta->error);
}

$consulta->store_result();

if ($consulta->num_rows > 0) {
    echo "Login realizado com sucesso!";
    echo "<p><a href='lista.php'>Ver lista de alunos</a></p>";
} else {
    echo "CPF ou senha incorretos!";
}

$consulta->close();

?>
