
<?php
    // if (empty($_POST['nome']) || empty($_POST['senha'])) {
    //     header('Location: index.php');
    //     exit();
    // }

    define("HOST", "127.0.0.1");
    define("USUARIO", "root");
    define("SENHA", "novasenha");
    define("BD", "login");

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ("Erro de conexão com o Banco de dados");
?>