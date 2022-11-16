

<?php 

require_once('conexao.php');

$id=$_POST['codigo'];

$curso = $_POST['txt_nome_curso'];
$seriecurso = $_POST['txt_serie_curso'];
$horarioentrada = $_POST['txt_horario_entrada'];
$horariosaida = $_POST['txt_horario_saida'];
$turno = $_POST['txt_turno'];


$sql_atualizarcurso=mysqli_query($ligar ,"UPDATE curso SET curso='$curso ', serie='$seriecurso  ',horario_entrada='$horarioentrada',horario_saida='$horariosaida ',turno='$turno'   where id_curso='$id'  ");

if($sql_atualizarcurso==true){

    echo "<script>alert ('Curso atualizado com sucesso');window.location.href='listarCurso.php';</script>";

}else{

    echo "<script>alert ('Falha na atualização');window.location.href='atualizarcurso.php';</script>";


}


?>


