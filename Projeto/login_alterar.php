<?php
include('./template/topo.php');
include('./auth/valida_login.php');
$dados = [];  // Inicializa a variável como um array vazio

if (isset($_GET['id'])) {
// if (true === true) {
    $id = $_GET['id'];

    $con = new mysqli("localhost", "root", "", "projeto");

    if ($con->connect_error) {
        die("Falha na conexão: " . $con->connect_error);
    }

    $sql = "SELECT * FROM cadastro WHERE id=$id";
    $rs = $con->query($sql);

    if ($rs && $rs->num_rows > 0) {
        $dados = $rs->fetch_assoc();
    } else {
        echo "Nenhum registro encontrado com o ID: $id";
    }

    $con->close();
} else {
    echo "ID não foi fornecido.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class='container'>
        <div class="row">
            <form method="post" action="pessoas_alterar_salvar.php">
                <input type="hidden"
                        name="id"
                        value="<?php echo isset($dados['id']) ? $dados['id'] : ''; ?>"
                    />
                <h2>Formulário de pessoas</h2>
                <div class="col-md-6">
                    <label class='form-group'>
                        Email da pessoa
                    </label>
                    <input type="text" 
                            name="email" 
                            class="form-control"
                            value="<?php echo isset($dados['email']) ? $dados['email'] : ''; ?>"
                    >
                </div>
                <div class="col-md-6">
                    <label class='form-group'>
                        Senha
                    </label>
                    <input type="password" name="senha" class="form-control" value="<?php echo isset($dados['senha']) ? $dados['senha'] : ''; ?>">
                </div>

                <div class="col-md6 mt3">
                    <input type="submit" value="SALVAR" class="btn btn-primary">
                    <a href="loginval.php" class="btn btn-danger">CANCELAR</a>
                </div>
            </form>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
