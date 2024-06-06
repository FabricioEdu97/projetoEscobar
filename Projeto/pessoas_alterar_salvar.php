<?php
include('./template/topo.php');
include('./auth/valida_login.php');
    $id = @$_POST["id"];
    $cpf = @$_POST["cpf"];
    $cidade = @$_POST["cidade"];
    $estado = @$_POST["estado"];
    $sexo = @$_POST["sexo"];
  
  
  

    $con = new mysqli("localhost",
                    "root",
                    "",
                    "projeto");

    $sql = "UPDATE pessoa
               SET cpf='$cpf',
                   cidade='$cidade',
                   estado='$estado',
                   sexo='$sexo'
             WHERE id = $id
               ";

    $con->query($sql);
    header("location: pessoas.php");
?>