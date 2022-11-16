<?php
require __DIR__.'/vendor/autoload.php';

require_once('conexao.php');

$id = $_POST['codigo'];

$serie = $_POST['txt_serie'];
$pai = $_POST['txt_pai'];
$endereco = $_POST['txt_endereco'];
$nomealuno = $_POST['txt_nome'];
$celularaluno = $_POST['txt_celular'];
$curso = $_POST['txt_curso'];
$periodo = $_POST['txt_periodo'];
$ano = $_POST['txt_ano'];

$nome_arquivo = null;

if (isset($_FILES['txt_foto_pai'])) {
    if ($_FILES['txt_foto_pai']['error'] == UPLOAD_ERR_OK) {

        $path = './src/uploads/';
        $nome_arquivo = uniqid() . '-' . filter_var($_FILES['txt_foto_pai']['name'], FILTER_SANITIZE_URL);


        $tmp_name = $_FILES['txt_foto_pai']['tmp_name'];
        move_uploaded_file($tmp_name, $path . '/' . $nome_arquivo);
    }
}

//dd(empty($nome_arquivo));

$sqlfoto = "select foto_pai from aluno where id_aluno=$id";
if ($nome_arquivo) {
    $sql_atualizaraluno = mysqli_query($ligar, "UPDATE aluno SET serie='$serie ', pai='$pai',endereco='$endereco',nome='$nomealuno ',celular='$celularaluno',curso='$curso' ,periodo='$periodo' ,ano='$ano' ,foto_pai='$nome_arquivo'  where id_aluno='$id'  ");
    
    //dd('1', $sql_atualizaraluno);
} else {
    $sql_atualizaraluno = mysqli_query($ligar, "UPDATE aluno SET serie='$serie ', pai='$pai',endereco='$endereco',nome='$nomealuno ',celular='$celularaluno',curso='$curso' ,periodo='$periodo' ,ano='$ano'  where id_aluno='$id'  ");
    //dd('2',$sql_atualizaraluno);
}

//$sql_atualizaraluno = mysqli_query($ligar, "UPDATE aluno SET serie='$serie ', pai='$pai',endereco='$endereco',nome='$nomealuno ',celular='$celularaluno',curso='$curso' ,periodo='$periodo' ,ano='$ano' ,foto_pai='$fotopai'  where id_aluno='$id'  ");

if ($sql_atualizaraluno == true) {

    echo "<script>alert ('Usuario atualizado com sucesso');window.location.href='listarAluno.php';</script>";

} else {

    echo "<script>alert ('Falha na atualização');window.location.href='atualizaraluno.php';</script>";


}

