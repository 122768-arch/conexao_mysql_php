
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login de Alunos</title>
</head>
<body>

    <h1>Login de Alunos</h1>

    <form action="login.php" method="POST">
        <p>CPF:</p>
        <input type="text" name="cpf" maxlength="11" required>

        <p>Senha:</p>
        <input type="password" name="senha" required>

        <br><br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>
