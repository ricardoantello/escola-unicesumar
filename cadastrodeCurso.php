
<?php 

require_once('conexao.php');

$curso = $_POST['txt_nome_curso'];
$seriecurso = $_POST['txt_serie_curso'];
$horarioentrada = $_POST['txt_horario_entrada'];
$horariosaida = $_POST['txt_horario_saida'];
$turno = $_POST['txt_turno'];




$sql_cadastrocurso=mysqli_query($ligar,"INSERT INTO curso (curso,serie,horario_entrada,horario_saida,turno)values('$curso','$seriecurso','$horarioentrada','$horariosaida','$turno ')");

if($sql_cadastrocurso == true){

    echo "<script>alert ('Curso cadastrado com sucesso');window.location.href='listarCurso.php';</script>";

}else{

    echo "<script>alert ('Falha no Cadastro');window.location.href='cadastrodeCurso.html';</script>";


}




