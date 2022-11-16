

<?php 

require_once('conexao.php');

$id=$_POST['codigo'];

$usuario = $_POST['txt_usuario'];
$senha = $_POST['txt_senha'];
$email = $_POST['txt_email'];
$nivel = $_POST['txt_nivel'];

$sql_atualizar=mysqli_query($ligar ,"UPDATE usuario SET usuario='$usuario', senha='$senha',email='$email',nivel='$nivel'  where id_usuario='$id'  ");

if($sql_atualizar==true){

    echo "<script>alert ('Usuario atualizado com sucesso');window.location.href='listarUsuarios.php';</script>";

}else{

    echo "<script>alert ('Falha na atualização');window.location.href='atualizar.php';</script>";


}


?>


