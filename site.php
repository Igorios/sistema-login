
<?php
    session_start();

    if (!isset($_SESSION["id_usuario"])) {
        header("Location: index.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ola Mundo</h1>
    <p> <a href="sair.php"> <b>Sair</b> </a> </p>
</body>
</html>