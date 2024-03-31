<?php
$host= "127.0.0.1:3310";
$usuario = "suporte";
$senha = "suporte";
$bd = "senac";

$con = mysqli_connect($host, $usuario, $senha, $bd);
//$con = new mysqli($host, $usuario, $senha, $bd);
if ($con -> connect_errno){
echo "Falha na Conexão: (".$con->connect_errno.")".$con-> connect_error;
}
echo $con->host_info . "\n";



    