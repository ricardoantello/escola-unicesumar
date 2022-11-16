<?php 

require_once('conexao.php');

$usuario = $_POST['txt_usuario'];
$senha = $_POST['txt_senha'];
$email = $_POST['txt_email'];
$nivel = $_POST['txt_nivel'];

$sql_cadastro=mysqli_query($ligar,"INSERT INTO usuario (usuario,senha,email,nivel)values('$usuario','$senha','$email','$nivel')");

if($sql_cadastro == true){

    echo "<script>alert ('Usuario cadastrado com sucesso');window.location.href='listarUsuarios.php';</script>";

}else{

    echo "<script>alert ('Falha no Cadastro');window.location.href='cadastroUsuario.html';</script>";


}


