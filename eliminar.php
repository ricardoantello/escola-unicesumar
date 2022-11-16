<?php  

include_once('conexao.php');

$id=$_GET['codigo'];

$sql_eliminar=mysqli_query($ligar , "DELETE FROM usuario where id_usuario='$id' " );

if($sql_eliminar==true){


    echo "<script>alert ('Usuario foi Excluido com Sucesso');window.location.href='listarUsuarios.php';</script>";


}else{

    echo "<script>alert ('Falha ao Excluir usuário');window.location.href='listarUsuarios.php';</script>";



}


?>