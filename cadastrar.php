
<?php
    require_once("class/usuario.php");
    $u = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastrar.css">
    <title>Document</title>
</head>
<body>
    <section class="container">
        <h2>Cadastrar</h2>
    
        <form method="POST">
            <div class="formCad">
                <input type="text" name="nome" id="nome" placeholder="Nome Completo" maxlength="50">
                <input type="text" name="tel" id="tel" placeholder="Telefone" maxlength="50">
                <input type="email" name="email" id="email" placeholder="Usuário" maxlength="50">
                <input type="password" name="senha" id="senha" placeholder="Senha" maxlength="50">
                <input type="password" name="confSenha" id="confSenha0" placeholder="Confirmar Senha" maxlength="50">
                <input class="btn-submit" type="submit" value="Cadastrar">
            </div>
        </form>

    </section>

    <?php
        if (isset($_POST["nome"])) {
            $nome = addslashes($_POST["nome"]);
            $telefone = addslashes($_POST["tel"]);
            $email = addslashes($_POST["email"]);
            $senha = addslashes($_POST["senha"]);
            $confSenha = addslashes($_POST["confSenha"]);

            if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confSenha) ) {
                $u->conectar("projeto_login", "localhost", "root", "novasenha");

                if ($u->msgErro == "") { # Sem erro

                    if ($senha == $confSenha) {

                        if ($u->cadastrar($nome, $telefone, $email, $senha)) {
                            echo "Cadastrado com sucesso! Acesse para entrar!";
                        } else {
                            echo "Email já cadastrado";
                        }

                    } else {
                        echo "Senha não correspodem!";
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