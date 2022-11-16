

<?php
include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Lista de Alunos</title>

   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <h1> Lista dos Alunos </h1>

   <hr>

   <a href="cadastroAluno.html">
      CADASTRAR NOVO ALUNO
   </a>
   <hr>
     <form  method="POST" action="" >
      <label> PESQUISAR ALUNOS: <div class="box-search">
      <input type="search" name="s"></h2>  </label> <br>
      <center>
      <input name="SendPesqUser" type="submit" value="Pesquisar"> <br>
      </center>
     

</form>

<?php



$SendPesqUser=filter_input(INPUT_POST,'SendPesqUser', FILTER_SANITIZE_STRING);

if($SendPesqUser){
   
   $nome=filter_input(INPUT_POST,'s', FILTER_SANITIZE_STRING);

   $result_usuario="SELECT * FROM aluno  WHERE nome LIKE   '%$nome%' ";
   $sql_consulta=mysqli_query($ligar, $result_usuario);


} else {
   $sql_consulta = mysqli_query($ligar, "select * from aluno");
}


?>


  
   
      
   </div>
   <table rules="all">
      <thead>
         <tr>
            <th>CÓDIGO</th>
            <th>NOME ALUNO</th>
            <th>CURSO</th>
            <th>SERIE</th>
            <th>PAI</th>
            <th>ENDEREÇO</th>
            <th>CELULAR</th>
            <th>PERIODO</th>
            <th>ANO PERIODO</th>
            <th>FOTO PAI</th>
         </tr>
      </thead>

      <tbody>
         <?php

            /*
             Totaliza a quantidade de registros na tabela (comentario em php)
             */

            $TOTAL = mysqli_num_rows($sql_consulta);
            while ($dados = mysqli_fetch_array($sql_consulta)) {
               /*
                Fechando o PHP para incluir html na mesma pagina
                */
            ?>
         <tr>

            <td>
               <?= $dados[0] ?>
            </td>
            <td>
               <?= $dados[4] ?>
            </td>
            <td>
               <?= $dados[6] ?>
            </td>
            <td>
               <?= $dados[1] ?>
            </td>
            <td>
               <?= $dados[2] ?>
            </td>
            <td>
               <?= $dados[3] ?>
            </td>
            <td>
               <?= $dados[5] ?>
            </td>
            <td>
               <?= $dados[7] ?>
            </td>
            <td>
               <?= $dados[8] ?>
            </td>
            <td> <img src="./src/uploads/<?= $dados[9] ?>" /> </td>
            <td> <a href="eliminaraluno.php?codigo=<?= $dados[0] ?>  ">
                  <font color="black"> Eliminar </font>
               </a> 
            </td>
            <td> <a href="editaraluno.php?codigo=<?= $dados[0] ?>    ">
                  <font color="black"> Editar </font>
               </a> 
            </td>
         </tr>

         <!- aqui abre e fecha com script de PHP o deixando a chave do HTML no meio encerrando o html ->
         <?php } ?>

      </tbody>

      <tfoot>
         <tr>
            <td colspan="11"> TOTAL DE REGISTROS:<?= $TOTAL ?>
            </td>
         </tr>
      </tfoot>

   </table>

   <a href="principal.php">
      RETORNAR
   </a><br><br>
   <a href="rel_aluno.php">
      IMPRIMIR
   </a>

</body>

</html>