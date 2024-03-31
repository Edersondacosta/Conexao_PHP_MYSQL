<?php
include("verificacao.php");
include("conect.php");

if ($_SESSION['setor'] != 'adm'){
    header("location: index.php");
    exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatótio</title>
</head>
<body>
<?php
$query = "select * from user";

$result= mysqli_query($con, $query);

$row = mysqli_num_rows($result);



?>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-0pky">Nome</th>
    <th class="tg-0pky">Senha</th>
    <th class="tg-0pky">Setor</th>
  </tr>
</thead>
<?php while ($retorno = mysqli_fetch_array($result)){
 ?>
<tbody>
  <tr>
    <td class="tg-0pky"><?php echo $retorno["username"];?></td>
    <td class="tg-0pky"><?php echo $retorno["password"];?></td>
    <td class="tg-0pky"><?php echo $retorno["setor"];?></td>
  </tr>
  <?php }?>
</tbody>
</table>
    
</body>
</html>