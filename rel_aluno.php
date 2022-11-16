<?php


require 'vendor/autoload.php';

include_once('conexao.php');

use Dompdf\Dompdf;

$HTML ='<table border=1>';


$HTML .= '<thead>';
$HTML .= '<tr>';


$HTML .= '<th> ALUNO </th> ';
$HTML .= '<th> CURSO </th> ';
$HTML .= '<th> SERIE </th> ';
$HTML .= '<th> ENDEREÇO </th> ';
 $HTML .= '<th> PAI </th> ';
 $HTML .= '<th> CELULAR </th> ';
 $HTML .= '<th> PERIODO </th> ';
 $HTML .= '<th> ANO PERIODO </th> ';


$HTML .= '</tr>';
$HTML .= '</thead>';

$dompdf = new Dompdf();

$lista = mysqli_query($ligar, "SELECT * FROM aluno");
$TOTAL = mysqli_num_rows($lista);

while ($dados = mysqli_fetch_array($lista)) {



    
    $HTML .= '<body>';
    $HTML .= '<tr>';

 
    $HTML .= '<td>' . $dados['4'] . '</td>';
    $HTML .= '<td>' . $dados['6'] . '</td>';
    $HTML .= '<td>' . $dados['1'] . '</td>';
    $HTML .= '<td>' . $dados['3'] . '</td>';
    $HTML .= '<td>' . $dados['2'] . '</td>';
    $HTML .= '<td>' . $dados['5'] . '</td>';
    $HTML .= '<td>' . $dados['7'] . '</td>';
    $HTML .= '<td>' . $dados['8'] . '</td>';

    $HTML .= '</tr>';
    $HTML .= '</body>';


}


$HTML .= '</table>';

$dompdf->loadHtml('

 <h1>  RELATORIO DE ALUNOS</h1> 

<! – Concatenando o .$HTML  para que carregue os dados e imprinmir o Relatorio –>

'.$HTML);


$dompdf->render();

$dompdf->stream(

 
    "lista_de_Alunos.pdf",

    array(

    "attachment" => false
)

);


?>
