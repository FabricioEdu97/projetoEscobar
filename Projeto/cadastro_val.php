<?php

    $email   = @$_POST['email'];
    $senha    = @$_POST['senha'];

    $conexao = new mysqli(
        'localhost',
        'root',
        '',
        'projeto'
    );

    $sql = "
INSERT INTO cadastro 
(email, senha)
VALUES
('$email','$senha')
    ";

    $conexao->query($sql);


    header('location: index.php');

