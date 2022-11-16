
<?php 
require __DIR__.'/vendor/autoload.php';

require_once('conexao.php');


$curso = $_POST['txt_curso'];
$serie = $_POST['txt_serie'];
$pai = $_POST['txt_pai'];
$endereco = $_POST['txt_endereco'];
$nomealuno = $_POST['txt_nome'];
$celular = $_POST['txt_celular'];
$periodo = $_POST['txt_periodo'];
$ano = $_POST['txt_ano'];

$nome_arquivo = null;

if (isset($_FILES['txt_foto_pai'])) {
    if ($_FILES['txt_foto_pai']['error'] == UPLOAD_ERR_OK) {
    
        $path = './src/uploads/';
        $nome_arquivo = uniqid() . '-'. filter_var($_FILES['txt_foto_pai']['name'], FILTER_SANITIZE_URL);
    
    
        $tmp_name = $_FILES['txt_foto_pai']['tmp_name'];
        move_uploaded_file($tmp_name, $path . '/' . $nome_arquivo);
    }
}

////$fotopai = $_POST " $dir/" $file['name'];



////$dir = "img/";
////$file = $_FILES["$fotopai"];

/*
if (move_uploaded_file($file["tmp_name"]. "$dir/".$file["name"] )) {

    echo " Arquivo enviado com sucesso";

}else{

    echo " Erro o arquivo nao pode ser enviado verifique o tipo de arquivo.";

}

*/

/*
  //verifica se ja exite o aluno neste curso neste periodo ou ano
  
$sql_existe=mysqli_query($ligar , "select * from aluno  where nome='$nomealuno' and curso='$curso ' and ano='$ano' ");


if(mysqli_num_rows($sql_existe)!=0){

    echo "<script>alert('Aluno ja cadastrado para este ano periodo');window.location.href='listarAluno.php';</script>";

}else{

    echo "<script>alert ('Aluno cadastrado com sucesso');window.location.href='listarAluno.php';</script>";  

}


*/



$sql_cadastroaluno=mysqli_query($ligar,"INSERT INTO aluno (curso,serie,pai,endereco,nome,celular,periodo,ano,foto_pai)values('$curso','$serie','$pai','$endereco','$nomealuno','$celular','$periodo','$ano','$nome_arquivo' )");

if($sql_cadastroaluno==true){

    echo "<script>alert ('Aluno cadastrado com sucesso');window.location.href='listarAluno.php';</script>";

}else{

    echo "<script>alert ('Falha no Cadastro');window.location.href='cadastroAluno.html';</script>";


}




