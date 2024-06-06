<!-- inserir_veiculo.php -->
<?php
include('./template/topo.php');
include('./auth/valida_login.php');
include('./database/conectar.php');

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $ano_fabricacao = mysqli_real_escape_string($conn, $_POST['ano_fabricacao']);
    $modelo_id = mysqli_real_escape_string($conn, $_POST['modelo_id']);
    $marca_id = mysqli_real_escape_string($conn, $_POST['marca_id']);

    // Inserir o veículo na tabela carro
    $sql = "INSERT INTO carro (carro.nome, ano_fabricacao, modelo_id, marca_id)
            VALUES ('$nome', '$ano_fabricacao', '$modelo_id', '$marca_id')";

    if ($conn->query($sql) === TRUE) {
        echo "Veículo adicionado com sucesso.";
    } else {
        echo "Erro ao adicionar veículo: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inserir Veículo</title>
</head>
<body>

<h2>Inserir Veículo</h2>

<form method="POST" action="">
    <label for="veiculo">Veículo:</label>
    <input type="text" name="veiculo" required>
    <br>
    <label for="ano_fabricacao">Ano de Fabricação:</label>
    <input type="text" name="ano_fabricacao" required>
    <br>
    <label for="modelo_id">ID do Modelo:</label>
    <input type="text" name="modelo_id" required>
    <br>
    <label for="marca_id">ID da Marca:</label>
    <input type="text" name="marca_id" required>
    <br>
    <input type="submit" value="Adicionar Veículo">
</form>

</body>
</html>
