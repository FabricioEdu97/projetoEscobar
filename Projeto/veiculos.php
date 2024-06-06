<?php
include './database/conectar.php';
include('./template/topo.php');
include('./auth/valida_login.php');

$marcasResult = $conn->query("SELECT id, nome FROM marca");
$modelosResult = $conn->query("SELECT id, nome FROM modelo");

if(isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];

    // Use a variável de conexão $conn em vez de $conexao
    $sql_delete = "DELETE FROM carro WHERE id = $id";

    if ($conn->query($sql_delete) === TRUE) {
        function sucesso(){
            echo "<h1>REGISTRO DELETADO COM SUCESSO.</h1>";
        }
    } else {
        echo "Erro ao deletar registro: " . $conn->error;
    }
}

$sql = "SELECT * FROM carro";

$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Veículos</title>
</head>
<body>

<h2>Buscar Veículos</h2>
<a href='pessoas_cadastro.php' class="btn btn-success">
        ADICIONAR
    </a>
<form method="POST" action="">
    <label for="marca">Marca:</label>
    <select name="marca" id="marca">
        <option value="">Selecione uma Marca</option>
        <?php
        if ($marcasResult->num_rows > 0) {
            while($marca = $marcasResult->fetch_assoc()) {
                echo "<option value='" . $marca["id"] . "'>" . $marca["nome"] . "</option>";
            }
        }
        ?>
    </select>

    <label for="modelo">Modelo:</label>
    <select name="modelo" id="modelo">
        <option value="">Selecione um Modelo</option>
        <?php
        if ($modelosResult->num_rows > 0) {
            while($modelo = $modelosResult->fetch_assoc()) {
                echo "<option value='" . $modelo["id"] . "'>" . $modelo["nome"] . "</option>";
            }
        }
        ?>
    </select>
    
    <button type="submit">Buscar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marcaId = $_POST['marca'];
    $modeloId = $_POST['modelo'];

    $sql = "
       SELECT carro.id, carro.nome AS carro_nome, carro.ano_fabricacao, modelo.nome AS modelo_nome, marca.nome AS marca_nome
       FROM carro
       INNER JOIN modelo ON carro.modelo_id = modelo.id 
       LEFT JOIN marca ON carro.marca_id = marca.id
       WHERE 1=1
    ";

    if (!empty($marcaId)) {
        $sql .= " AND carro.marca_id = " . $marcaId;
    }

    if (!empty($modeloId)) {
        $sql .= " AND carro.modelo_id = " . $modeloId;
    }

    $result = $conn->query($sql);

    if (!$result) {
        die("Erro na consulta SQL: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        echo "<h2>Resultados da Busca</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Carro</th><th>Ano de Fabricação</th><th>Modelo</th><th>Marca</th><th>Ações</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["carro_nome"] . "</td>
                    <td>" . $row["ano_fabricacao"] . "</td>
                    <td>" . $row["modelo_nome"] . "</td>
                    <td>" . $row["marca_nome"] . "</td>
                    <td>
                        <form method='POST' action=''>
                            <input type='hidden' name='delete_id' value='" . $row["id"] . "'>
                            <button type='submit'>Excluir</button>
                        </form>
                           <form method='POST' action='veiculos_alterar.php'>
                                <input type='hidden' name='edit' value='". $row["id"] ."'>
                                <button type='submit' class='btn btn-success'>EDITAR</button>
                            </form>
                            
                    </td>
                  </tr>";

                  
        }
        
        echo "</table>";
    } else {
        echo "0 resultados";
    }
}


$conn->close();
?>

</body>
</html>
