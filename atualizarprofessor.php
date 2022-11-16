

<?php 

require_once('conexao.php');

$id=$_POST['codigo'];

$nome_professor = $_POST['txt_nome_professor'];
$curso = $_POST['txt_curso_professor'];
$serie  = $_POST['txt_serie_professor'];
$periodo= $_POST['txt_periodo_professor'];



$sql_atualizarcurso=mysqli_query($ligar ,"UPDATE professor SET nome='$nome_professor ', curso='$curso  ',serie='$serie',periodo='$periodo '   where id_professor='$id'  ");

if($sql_atualizarcurso==true){

    echo "<script>alert ('Professor atualizado com sucesso');window.location.href='listarprofessor.php';</script>";

}else{

    echo "<script>alert ('Falha na atualização');window.location.href='atualizarprofessor.php';</script>";


}


?>


