
<?php
    session_start();
    include_once('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem Vindo ao Site</h1>
    <h2>Olá, <?php echo $_SESSION['usuario'] ?></h2>
    <h3><a href="logout.php">Sair</a></h3>
</body>
</html>