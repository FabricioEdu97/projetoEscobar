<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br>
        <input type="submit" value="Entrar">
    </form>
    <a href="cadastro.php">Registre-se</a>
</body>
</html>
<?php
session_start();

if (isset($_SESSION["logado"]) && $_SESSION["logado"] === true) {
    header("Location: loginval.php"); // Redirecionar para a página restrita se já estiver logado
    exit;
}

$email = $_GET["email"] ?? null;
$senha = $_GET["senha"] ?? null;

$con = new mysqli("localhost", "root", "", "projeto");

if ($con->connect_error) {
    die("Falha na conexão: " . $con->connect_error);
}

if ($email && $senha) {
    // Usar prepared statements para evitar SQL Injection
    $stmt = $con->prepare("SELECT * FROM cadastro WHERE email = ? AND senha = ?");
    
    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $con->error);
    }
    
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $_SESSION["logado"] = true; // Definir a session logado como true
        header("Location: index.php"); // Redirecionar para a página restrita
        exit;
    } else {
        echo "Credenciais inválidas";
        echo "<br/>";
        echo "<a href='index.php'>Voltar</a>";
    }
    $stmt->close();
} else {
    echo "Por favor, forneça email e senha.";
}

$con->close();
?>
