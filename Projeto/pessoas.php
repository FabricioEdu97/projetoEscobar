<?php
include('./template/topo.php');
include('./auth/valida_login.php');
$conexao = new mysqli('localhost', 'root', '', 'projeto');

if(isset($_POST['delete_id'])) { 
    // verifica se recebeu o id
    $id = $_POST['delete_id'];
    // deleta o registro com base no ID
    $sql_delete = "DELETE FROM pessoa WHERE id = $id";
    // executa a query 
    if ($conexao->query($sql_delete) === TRUE) {
        function sucesso(){
            echo "<h1>REGISTRO DELETADO COM SUCESSO.</h1>";
        }
    } else {
        echo "Erro ao deletar registro: " . $conexao->error;
    }
}
$sql = "SELECT * FROM pessoa";
// executa a query
$resultado = $conexao->query($sql);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <a href='pessoas_cadastro.php' class="btn btn-success"> 
        ADICIONAR
        <a href='loginval.php' class="btn btn-danger"> 
        MENU
        </a>

    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Sexo</th>
            
            <th>Alterar/excluir</th>
        </thead>
        <tbody>
            <?php
                $conexao = new mysqli('localhost','root','','projeto');
                $sql = "SELECT * FROM pessoa";
                $resultado = $conexao->query($sql);
                while($dados = $resultado->fetch_assoc()) {
                    echo "<tr>
                        <td>" . $dados["id"] . "</td>
                        <td>" . $dados['nome'] ."</td>
                        <td>" . $dados['cpf'] ."</td>
                        <td>" . $dados['cidade'] ."</td>
                        <td>" . $dados['estado'] ."</td>
                        <td>" . $dados['sexo'] ."</td>
                        <td>
                            <form method='POST' action='pessoas_alterar.php'>
                            <input type='hidden' name='edit' value='". $dados["id"] ."'>
                            <button type='submit' class='btn btn-success'>EDITAR</button>
                            </form>
                            <form method='POST'>
                            <div class='button-container'>
                                <input type='hidden' name='delete_id' value='". $dados["id"] ."'> 
                                <button type='submit' onclick='return confirmarExclusao()' class='btn btn-danger'>EXCLUIR</button>
                                </div>
                            </form>

                       
                        </td>
                    </tr>";
                }
            ?>

        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>