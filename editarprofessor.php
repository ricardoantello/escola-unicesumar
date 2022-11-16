



<?php  

include_once('conexao.php');

$id=$_GET['codigo'];

$sql_consulta=mysqli_query($ligar , "select * from professor  where id_professor='$id'");

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

<h2> TELA DE EDIÇÃO DE PROFESSORES</h2>
<hr>

  
<form  method="POST"  action="atualizarprofessor.php">

<input type="hidden" name="codigo"  value='<?= $dados[0] ?>'  >

NOME:<br>
<input type="text" name="txt_nome_professor" value='<?= $dados[1] ?>' ><br>
<br>

SERIE:<br>
<input type="text" name="txt_serie_professor" value='<?= $dados[3] ?>' ><br>
CURSO:<br>
<input type="text" name="txt_curso_professor"  value='<?= $dados[2] ?>'><br>
<br>
PERIODO:<br>
<input type="text" name="txt_periodo_professor" value='<?= $dados[4] ?>' ><br>


<center>
<input type="submit" value="ATUALIZAR"><br>
<br>
</center>

<a href="listarprofessor.php">RETORNAR</a><br><br>

</form>
</center>

    
    
</body>
</html>