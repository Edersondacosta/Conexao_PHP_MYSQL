<?php
include("conect.php");
session_start( );


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

 //$username = mysqli_real_escape_string($con, $_POST["username"]);
 //$password = mysqli_real_escape_string($con, $_POST["password"]);


 if (empty ($_POST["username"]) || empty ($_POST["password"])){
    header ("location: index.php");
    exit();
    } 


 //echo "O nome digitado foi $username e a senha foi $password<br>";

 $query = "select * from user where username = '{$username}' and password = '{$password}'";

 $result= mysqli_query($con, $query);

 $row = mysqli_num_rows($result);
 $retorno = mysqli_fetch_array($result);
// echo "$row";
 
 if ($row>0){
    $_SESSION["name"] = $username;
    $_SESSION["senha"] = $password;
    $_SESSION["setor"] = $retorno["setor"];
    echo $_SESSION["setor"];
    
    if ($_SESSION["setor"] == "adm"){
      header("location: admin.php");}
    else if ($_SESSION["setor"] == "user"){
         header("location: usuario.php");
   }
   
    exit();
    }


    else 
    if($row<=0){
           $_SESSION["nao_autenticado"] = true;
           //echo "<script type='javascript'>alert('Login ou Senha Inválidos!');";
           //sleep(5);
           header("location: index.php");
           exit();
      
         }  


 ?>


 <button type="button" class="btn btn-primary"><a href="index.php"> Voltar</a></button>

</body>
</html>