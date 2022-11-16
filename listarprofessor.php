

<?php

include_once('conexao.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cursos</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <center>

    <h1> Lista dos Professores </h1>

 <hr>
 <tr>
 
        <table rules="all">
        <a href="cadastroprofessor.html">  <font color="black"> CADASTRAR NOVO PROFESSOR</font>   </a>
        <hr>
   <thead>
    <tr>
    <th>CÓDIGO</th>
    <th>NOME </th>
     <th>CURSO</th>
     <th>SERIE</th>
     <th>PERIODO</th>
       
     </tr>

    </thead>

    <tbody>
    
    <?php

    $sql_consulta=mysqli_query($ligar , "select * from professor");
  
   /*
  Totaliza a quantidade de registros na tabela (comentario em php)
   */  

    $TOTAL =mysqli_num_rows($sql_consulta);


    while($dados=mysqli_fetch_array($sql_consulta)){

                  /*
         Fechando o PHP para incluir html na mesma pagina
            */
    ?>


      <tr>
      
      <td> <?= $dados[0] ?> </td>
      <td> <?= $dados[1] ?> </td>
      <td> <?= $dados[2] ?> </td>
      <td> <?= $dados[3] ?> </td>
      <td> <?= $dados[4] ?> </td>
     
       

      <td> <a href="eliminaprofessor.php?codigo=<?= $dados[0]  ?>  "> <font color="black">  Eliminar </font> </a>    </td>
      <td> <a href="editarprofessor.php?codigo=<?= $dados[0]  ?>    "> <font color="black">  Editar    </font> </a>    </td>
      </tr>

      <!- aqui abre e fecha com script de PHP o deixando a chave do HTML no meio encerrando o html  ->
       <?php }  ?>

      

    <tr> <td colspan="7">  TOTAL DE REGISTROS:<?=$TOTAL ?> </td> </tr>

    </tbody>
   </table>

   <a href="principal.php">  <font color="black">RETORNAR </font>   </a><br><br>
   <a href="rel_professor.php">  <font color="black">IMPRIMIR </font>   </a>

   </center>

    
</body>
</html>