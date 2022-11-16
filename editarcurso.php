



<?php  

include_once('conexao.php');

$id=$_GET['codigo'];

$sql_consulta=mysqli_query($ligar , "select * from curso  where id_curso='$id'");

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

<h2> TELA DE EDIÇÃO DE CURSOS</h2>
<hr>

  
<form  method="POST"  action="atualizarcurso.php">

<input type="hidden" name="codigo"  value='<?= $dados[0] ?>'  >

NOME_CURSO:<br>
<input type="text" name="txt_nome_curso" value='<?= $dados[1] ?>' ><br>
<br>

SERIE:<br>
<input type="text" name="txt_serie_curso" value='<?= $dados[2] ?>' ><br>
HORARIO_ENTRADA:<br>
<input type="text" name="txt_horario_entrada"  value='<?= $dados[3] ?>'><br>
<br>
HORARIO_SAIDA:<br>
<input type="text" name="txt_horario_saida" value='<?= $dados[4] ?>' ><br>

TURNO:<br>
<input type="text" name="txt_turno" value='<?= $dados[5] ?>' ><br> <br>


<center>
<input type="submit" value="ATUALIZAR"><br>
<br>
</center>

<a href="listarCurso.php">RETORNAR</a><br><br>

</form>
</center>

    
    
</body>
</html>