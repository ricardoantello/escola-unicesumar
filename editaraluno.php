<?php

include_once('conexao.php');

$id = $_GET['codigo'];

$sql_consulta = mysqli_query($ligar, "select * from aluno  where id_aluno='$id'");

$dados = mysqli_fetch_array($sql_consulta);


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

    ,<h1>ESCOLA</h1>
    <hr>

    <h2> TELA DE EDIÇÃO DE ALUNOS</h2>
    <a href="listarAluno.php"> RETORNAR </a>
    <hr>

    <form method="POST" action="atualizaraluno.php" enctype="multipart/form-data">

        <input type="hidden" name="codigo" value='<?= $dados[0] ?>'>

        NOME:<br>
        <input type="text" name="txt_nome" value='<?= $dados[4] ?>'>
        <br>

        CURSO:<br>
        <input type="text" name="txt_curso" value='<?= $dados[6] ?>'>
        <br>

        SERIE:<br>
        <select name="txt_serie">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>

        </select>
        <br>


        PAI:<br>
        <input type="text" name="txt_pai" value='<?= $dados[2] ?>'>
        <br>
        ENDERECO:<br>
        <input type="text" name="txt_endereco" value='<?= $dados[3] ?>'><br>

        CELULAR:<br>
        <input type="text" name="txt_celular" value='<?= $dados[5] ?>'><br>

        PERIODO:<br>
        <select name="txt_periodo">
            <option value="MANHA">MANHA</option>
            <option value="TARDE">TARDE</option>
            <option value="INTEGRAL">INTEGRAL</option>


        </select>
        <br>
        ANO PERIODO:<br>
        <input type="text" name="txt_ano" value='<?= $dados[8] ?>'><br>



        FOTO PAI:<br>
        <img src="./src/uploads/<?= $dados[9] ?>" />
        <br>
        <br>
        <input type="file" name="txt_foto_pai" value='<?= $dados[9] ?>'><br>

        <center>
            
            <input type="submit" value="ATUALIZAR">
        </center>
        <br>
        <br><br>

        <a href="listarAluno.php">RETORNAR</a><br><br>

    </form>




</body>

</html>