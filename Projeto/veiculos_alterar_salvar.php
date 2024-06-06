<?php
include('./template/topo.php');
include('./auth/valida_login.php');
include('./database/conectar.php');
$id = $_POST['id'];

$veiculo = $_POST['veiculo']; 
$modelo = $_POST['modelo'];
$marca = $_POST['marca']; 

$sql = "UPDATE cadastro
        SET veiculo='$veiculo',
            modelo='$modelo',
            marca='$marca'
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso.";
} else {
    echo "Erro ao atualizar registro: " . $conn->error;
}
