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
    $Email = $_POST["email"];
        

     $sql = "insert into usuarios(Usuario, Senha, Email) values ('{$Usuario}', '{$Senha}', '{$Email}');";
     $insert = mysqli_query($conexao, $sql);       
     header('location:Login.php');
    
    


    
    exit;

?>