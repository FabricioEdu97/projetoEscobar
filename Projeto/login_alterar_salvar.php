<?php

    $id = @$_POST["id"];
    $email = @$_POST["email"];
    $senha = @$_POST["senha"];
  

    $con = new mysqli("localhost",
                    "root",
                    "",
                    "projeto");

    $sql = "UPDATE cadastro
               SET email='$email',
                   senha='$senha'
                  
             WHERE id = $id
               ";

    $con->query($sql);
    header("location: loginval.php");
?>