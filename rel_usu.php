<?php


require 'vendor/autoload.php';

include_once('conexao.php');

use Dompdf\Dompdf;

$HTML ='<table border=1>';


$HTML .= '<thead>';
$HTML .= '<tr>';


$HTML .= '<th> USUARIO </th> ';
$HTML .= '<th> E-MAIL </th> ';
 $HTML .= '<th> NIVEL </th> ';


$HTML .= '</tr>';
$HTML .= '</thead>';

$dompdf = new Dompdf();

$lista = mysqli_query($ligar, "SELECT * FROM usuario");
$TOTAL = mysqli_num_rows($lista);

while ($dados = mysqli_fetch_array($lista)) {



    
    $HTML .= '<body>';
    $HTML .= '<tr>';

 
    $HTML .= '<td>' . $dados['1'] . '</td>';
    $HTML .= '<td>' . $dados['3'] . '</td>';
    $HTML .= '<td>' . $dados['4'] . '</td>';

    $HTML .= '</tr>';
    $HTML .= '</body>';


}


$HTML .= '</table>';

$dompdf->loadHtml('

 <h1>  RELATORIO DE USUARIOS</h1> 

<! – Concatenando o .$HTML  para que carregue os dados e imprinmir o Relatorio –>

'.$HTML);


$dompdf->render();

$dompdf->stream(

 
    "lista_de_Usuarios.pdf",

    array(

    "attachment" => false
)

);


?>
