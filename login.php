<?php     



include_once('conexao.php');

  $usuario=$_POST['txt_usuario'];
  $senha=$_POST['txt_senha'];


$sql_logar=mysqli_query($ligar , "select * from usuario  where usuario='$usuario' and senha='$senha'");


if(mysqli_num_rows($sql_logar)!=0){

 header('location:principal.php');

}else{

    echo "<script>alert('Usuario não Registrado');window.location.href='index.html';</script>";

}

?>
