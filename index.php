
<?php
    require_once "class/usuario.php";
    $u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Sistema de login</h1>
    <section class="container">
        <h2>Entrar</h2>
    
        <form method="POST">
            <input type="email" name="email" id="email" placeholder="Usuário">
            <input type="password" name="senha" id="senha" placeholder="Senha">
            <input class="btn-submit" type="submit" value="Entrar">
            <a href="cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se</strong> </a>
        </form>

    </section>

    <?php

    if (isset($_POST["email"])) {

        $email = addslashes($_POST["email"]);
        $senha = addslashes($_POST["senha"]);

        if (!empty($email) && !empty($senha)) {

            $u->conectar("projeto_login", "localhost", "root", "novasenha");

            if ($u->msgErro == "") {

            if ($u->logar($email, $senha)) {

               header("location: site.php"); 
            } else {
                echo "Email ou senha incorretos!";
            }

        } else {
            echo "Erro: " .$u->msgErro;
        }

        } else {
            echo "Preencha todos os campos!";
        }
    
    }

    ?>
    
</body>
</html>