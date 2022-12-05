<?php

    session_start();

    $host = "localhost:3306";
    $database = "dadoslogin";
    $user = "root";
    $password = "";

    $conexao = mysqli_connect($host, $user, $password, $database);
    if (!$conexao){
        die("Não conectou" + mysqli_connect_error());
    }

    $Usuario = $_POST['usuario'];
    $Senha = ($_POST['senha']);

    $query = "select Usuario, Usuario from usuarios where Usuario = '{$Usuario}' and Senha = '{$Senha}';";
    $insert = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($insert);
    
    if($row == 1){
        $_SESSION["usuario"] = $Usuario;
        header('location:index.php');

    } else{
        header('location:Página-Inicial.php');
         
    }
    /* */
?>