<?php 
    $email = @$_POST["email"];
    $senha = @$_POST["senha"];
 

    $query= "SELECT * FROM cadastro
    WHERE email = '$email'
    AND senha='$senha'
    ";

    $conexao = new mysqli("localhost",//servidor
                            "root",//usuario
                             "",//senha
                            "projeto");
    
    $sql = "INSERT INTO cadastro
    (email, senha)
    VALUES
    ('$email','$senha')";

    $conexao->query($sql);

  
?>
    
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- <meta name="viewport" content="width=<form action="cadastrar.php" method="post"> -->
   
<!-- </form> -->
    
    </head>
    <body>
        <form action="cadastro_val.php" method="POST">
        
    <label for="login">Login:</label>
    <input type="text" name="email" id="login" required>
    <br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" required>
    <br>
   
    <button type="submit">Cadastrar</button>
    </form>
    </body> 
    </html>

    