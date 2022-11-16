
<?php 

require_once('conexao.php');

$nomeprofessor = $_POST['txt_nome_professor'];
$curso = $_POST['txt_curso_professor'];
$serie = $_POST['txt_serie_professor'];
$periodo= $_POST['txt_periodo_professor'];





$sql_cadastrocurso=mysqli_query($ligar,"INSERT INTO professor (nome,curso,serie,periodo)values('$nomeprofessor','$curso','$serie','$periodo')");

if($sql_cadastrocurso == true){

    echo "<script>alert ('Professor cadastrado com sucesso');window.location.href='listarprofessor.php';</script>";

}else{

    echo "<script>alert ('Falha no Cadastro');window.location.href='cadastroProfessor.html';</script>";


}




