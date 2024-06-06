<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de Estado e Cidade</title>
</head>
<body>
    <h1>Selecione o Estado e a Cidade</h1>
    <form method="POST" action="">
        <label for="estado">Estado:</label>
        <select id="estado" name="estado" onchange="this.form.submit()">
            <option value="">Selecione um estado</option>
            <?php
            // Conexão com o banco de dados
            $conn = new mysqli("localhost", "root", "", "projeto");

            // Verificar conexão
            if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

            // Consulta para obter todos os estados
            $sql = "SELECT id, nome FROM estado";
            $result = $conn->query($sql);

            // Listar estados no select
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // Verifica se o estado foi selecionado
                    $selected = isset($_POST['estado']) && $_POST['estado'] == $row["id"] ? 'selected' : '';
                    echo '<option value="' . $row["id"] . '" ' . $selected . '>' . $row["nome"] . '</option>';
                }
            }

            ?>
        </select>

        <br><br>
        <label for="cidade">Cidade:</label>
        <select id="cidade" name="cidade">
            <option value="">Selecione um estado primeiro</option>
            <?php
            if (isset($_POST['estado']) && !empty($_POST['estado'])) {
                $estado_id = $_POST['estado'];

                // Consulta para obter as cidades com base no estado selecionado
                $sql = "SELECT id, nome FROM cidade WHERE estado_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $estado_id);
                $stmt->execute();
                $result = $stmt->get_result();

                // Gerar opções para o select de cidades
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["id"] . '">' . $row["nome"] . '</option>';
                    }
                } else {
                    echo '<option value="">Nenhuma cidade encontrada</option>';
                }

                $stmt->close();
            }

            $conn->close();
            ?>
        </select>
    </form>
</body>
</html>
