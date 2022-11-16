<?php  

include_once('conexao.php');

$id=$_GET['codigo'];

$sql_eliminar=mysqli_query($ligar , "DELETE FROM curso where id_curso='$id' " );

if($sql_eliminar==true){


    echo "<script>alert ('Curso foi Excluido com Sucesso');window.location.href='listarCurso.php';</script>";


}else{

    echo "<script>alert ('Falha ao Excluir Aluno');window.location.href='listarCurso.php';</script>";



}


?>