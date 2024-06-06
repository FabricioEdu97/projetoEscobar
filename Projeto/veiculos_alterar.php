<?php
include('./template/topo.php');
include('./auth/valida_login.php');
$dados = [];



if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $con = new mysqli("localhost", "root", "", "projeto");

    if ($con->connect_error) {
        die("Falha na conexão: " . $con->connect_error);
    }

    $sql = "SELECT * FROM pessoa WHERE id=$id";
    $rs = $con->query($sql);

    if ($rs && $rs->num_rows > 0) {
        $dados = $rs->fetch_assoc();
    } else {
        echo "Nenhum registro encontrado com o ID: $id";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Veiculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class='container'>
        <div class="row">
            <form method="post" action="veiculos_alterar_salvar.php">
                <input type="hidden" name="id" value="<?php echo isset($dados['id']) ? $dados['id'] : ''; ?>">
                <h2>Formulário de Alteração de Veiculo</h2>
                <div class="col-md-6">
                    <label class='form-group'>Veiculo:</label>
                    <input type="text" name="veiculo" class="form-control" value="<?php echo isset($dados['veiculo']) ? $dados['veiculo'] : ''; ?>">
                </div>
                <div class="col-md-6">
                    <label class='form-group'>Modelo:</label>
                    <input type="text" name="modelo" class="form-control" value="<?php echo isset($dados['modelo']) ? $dados['modelo'] : ''; ?>">
                </div>
                <div class="col-md-6">
                    <label class='form-group'>Marca:</label>
                    <input type="text" name="marca" class="form-control" value="<?php echo isset($dados['marca']) ? $dados['marca'] : ''; ?>">
                </div>
                <div class="col-md-6">
                    <input type="submit" value="SALVAR" class="btn btn-primary">
                    <a href="veiculos.php" class="btn btn-danger">CANCELAR</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
