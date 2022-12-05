<!DOCTYPE html>
<html>
<?php
    session_start();

    $host = "localhost:3306";
    $database = "DadosLogin";
    $user = "root";
    $password = "";

    $conexao = mysqli_connect($host, $user, $password, $database);
    if (!$conexao){
        die("Não conectou" + mysqli_connect_error());
    }
?>
    <head>
        <meta charset="utf-8"><meta http-equiv="refresh" content="0;url=trabalhoPI/index.php">
    </head>
    <body>

    </body>
</html>