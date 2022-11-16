<?php


require 'vendor/autoload.php';

include_once('conexao.php');

use Dompdf\Dompdf;

$HTML ='<table border=1>';


$HTML .= '<thead>';
$HTML .= '<tr>';


$HTML .= '<th> NOME </th> ';
$HTML .= '<th> CURSO </th> ';
$HTML .= '<th> SERIE </th> ';
 $HTML .= '<th> PERIODO </th> ';



$HTML .= '</tr>';
$HTML .= '</thead>';

$dompdf = new Dompdf();

$lista = mysqli_query($ligar, "SELECT * FROM professor");
$TOTAL = mysqli_num_rows($lista);

while ($dados = mysqli_fetch_array($lista)) {



    
    $HTML .= '<body>';
    $HTML .= '<tr>';

 
    $HTML .= '<td>' . $dados['1'] . '</td>';
    $HTML .= '<td>' . $dados['2'] . '</td>';
    $HTML .= '<td>' . $dados['3'] . '</td>';
    $HTML .= '<td>' . $dados['4'] . '</td>';
    $HTML .= '<td>' . $dados['5'] . '</td>';

    $HTML .= '</tr>';
    $HTML .= '</body>';


}


$HTML .= '</table>';

$dompdf->loadHtml('

 <h1>  RELATORIO DE PROFESSORES</h1> 

<! – Concatenando o .$HTML  para que carregue os dados e imprinmir o Relatorio –>

'.$HTML);


$dompdf->render();

$dompdf->stream(

 
    "lista_de_Professores.pdf",

    array(

    "attachment" => false
)

);


?>
