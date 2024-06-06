<?php
include('./template/topo.php');
include('./auth/valida_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de uma nova pessoa</title>
   </head>
<body>
    <div class='container'>
        <div class="row">
            <form method="post" action="pessoas_cadastro_salvar.php">
                <h2>Cadastro</h2>
                <div class="col-md-6">
                    <label class='form-group'>
                        Nome da pessoa
                    </label>
                    <input type="text" name="nome" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class='form-group'>
                        CPF
                    </label>
                    <input type="text" name="cpf" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class='form-group'>
                        Cidade
                    </label>
                    <input type="text" name="cidade" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class='form-group'>
                        Estado
                    </label>
                    <input type="text" name="estado" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class='form-group'>
                        sexo
                    </label>
                    <input type="text" name="sexo" class="form-control">
                </div>
                <div class="col-md-6">
                    <input type="submit" value="SALVAR" class="btn btn-primary">
                    <a href="loginval.php" class="btn btn-danger">CANCELAR</a>
                </div>

            </form>
        </div>
    </div>


</body>
</html>