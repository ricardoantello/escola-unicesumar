<?php  

include_once('conexao.php');

$id=$_GET['codigo'];

$sql_eliminar=mysqli_query($ligar , "DELETE FROM aluno where id_aluno='$id' " );

if($sql_eliminar==true){


    echo "<script>alert ('Aluno foi Excluido com Sucesso');window.location.href='listarAluno.php';</script>";


}else{

    echo "<script>alert ('Falha ao Excluir Aluno');window.location.href='listarAluno.php';</script>";



}


?>