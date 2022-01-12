<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>|| Tela de Login ||</title>
</head>
<body style="background-color: #f1f1f1;">
    <h1 class="text-center mt-5">Tela de Login</h1>
    <form action="login.php" method="POST">
        <div class="container mt-3">
            <?php
                if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div class="alert alert-danger" role="alert">
                ERRO! Usuario ou Senha inválidos!!
            </div>
            <?php
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
            </div>
            <button type="submit" class="btn btn-primary w-100">Entar</button>
        </div>
    </form>
</body>
</html>