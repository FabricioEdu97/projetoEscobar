<?php
if (isset($_POST['estado_id'])) {
    $estado_id = $_POST['estado_id'];

    // Conexão com o banco de dados
    $conn = new mysqli("localhost", "root", "", "projeto");

    // Verificar conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Consulta para obter as cidades com base no estado selecionado
    $sql = "SELECT id, nome FROM cidade WHERE estado_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $estado_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Gerar opções para o select de cidades
    if ($result->num_rows > 0) {
        echo '<option value="">Selecione uma cidade</option>';
        while ($row = $result->fetch_assoc()) {
            echo '<option value="' . $row["id"] . '">' . $row["nome"] . '</option>';
        }
    } else {
        echo '<option value="">Nenhuma cidade encontrada</option>';
    }

    $stmt->close();
    $conn->close();
}
?>
