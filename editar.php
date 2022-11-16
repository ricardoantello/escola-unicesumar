



<?php  

include_once('conexao.php');

$id=$_GET['codigo'];

$sql_consulta=mysqli_query($ligar , "select * from usuario  where id_usuario='$id'");

$dados=mysqli_fetch_array($sql_consulta);


?>



<!DOCTYPE html>
<html lang="PI">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIÇÃO</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <center>

,<h1>ESCOLA</h1>
<hr>

<h2> TELA DE EDIÇÃO DE USUÁRIO</h2>
<a href="listarusuarios.php">RETORNAR</a><br><br>
<hr>

  
<form  method="POST"  action="atualizar.php" enctype="multipart/form-data">

<input type="hidden" name="codigo"  value='<?= $dados[0] ?>'  >

USUARIO:<br>
<input type="text" name="txt_usuario" value='<?= $dados[1] ?>' ><br>
SENHA:<br>
<input type="password" name="txt_senha"  value='<?= $dados[2] ?>'><br>
<br>
EMAIL:<br>
<input type="text" name="txt_email" value='<?= $dados[3] ?>' ><br>

NIVEL:<br>
<select  name="txt_nivel"  >

 <option value="Admin">Administrador</option>
 <option value="Professor">Professor</option>
 <option value="Monitor">Monitor</option>
 <option value="Outro">Outro</option>

</select>
<br><br>
<center>
<input type="submit" value="ATUALIZAR"><br>
<br>
</center>

<a href="listarusuarios.php">RETORNAR</a><br><br>

</form>
</center>

    
    
</body>
</html>