<?php

$host = "sql101.infinityfree.com";
$banco = "if0_43416497_XXX";
$usuario = "if0_43416497";
$senha = "pedrinxs";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

$conexao->set_charset("utf8mb4");

?>
