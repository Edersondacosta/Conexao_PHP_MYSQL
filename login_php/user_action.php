<?php
include("conect.php");
//session_start( );
include("verificacao.php");

if ($_SESSION['setor'] != 'user'){
    header("location: index.php");
    exit();
    }
    ?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <?php

    
 
 $username = mysqli_real_escape_string($con, $_POST["username"]);
 $password = mysqli_real_escape_string($con, $_POST["password"]);
 $setor = mysqli_real_escape_string($con, $_POST["setor"]);
 //$username = mysqli_real_escape_string($con, $_POST["username"]);
 //$password = mysqli_real_escape_string($con, $_POST["password"]);


//  if (empty ($_POST["username"]) || empty ($_POST["password"])){
//     header ("location: index.php");
//     exit();
//     } 


 //echo "O nome digitado foi $username e a senha foi $password<br>";

 $query_insert = "insert into user values(null,'$username', '$password', '$setor')";
 echo $query_insert;
 $result= mysqli_query($con, $query_insert);

 if ($result_insert == ' '){
    echo "<script language:'javascript'> window.alert('Não foi possível efetuar o cadastro'); windows.location.href='usuario.php';</script>";
    
    }
    else
 {
     echo "<script language:'javascript'> window.alert('Cadastro efetuado com sucesso'); window.location.href='usuario.php';</script>";
     exit();
}


 //$retorno = mysqli_fetch_array($result);
// echo "$row";
?>
 <button type="button" class="btn btn-primary"><a href="index.php"> Voltar</a></button>
</body>
</html>