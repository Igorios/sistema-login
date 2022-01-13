
<?php

    define("HOST", "127.0.0.1");
    define("USUARIO", "root");
    define("SENHA", "novasenha");
    define("BD", "login");

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, BD) or die ("Erro de conexão com o Banco de dados");
?>