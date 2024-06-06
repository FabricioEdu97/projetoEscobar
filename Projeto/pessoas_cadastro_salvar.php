<?php
include('./template/topo.php');
include('./auth/valida_login.php');

    $nome  = @$_POST['nome'];
    $cpf = @$_POST['cpf'];
    $cidade = @$_POST['cidade'];
    $estado = @$_POST['estado'];
    $sexo = @$_POST['sexo'];
  
    

    $conexao = new mysqli(
        'localhost', //Servidor
        'root', //Usuario
        '', //Senha
        'projeto' //banco
    );

    $sql = "
INSERT INTO pessoa 
(nome, cpf, cidade, estado, sexo)
VALUES
('$nome','$cpf','$cidade','$estado','$sexo')
    ";  

    $conexao->query($sql);

    //echo "Pessoa adicionada com sucesso";
    header('location: pessoas.php');

?>