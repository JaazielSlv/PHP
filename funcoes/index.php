<?php 
// Para importar arquivo
include_once 'Helpers.php';
date_default_timezone_set("america/Sao_Paulo");

$texto = '      Texto para resumir         ';

        // conta quantidade de caracteres  (trim para tirar espaços em branco) 
print $total = mb_strlen(trim($texto));

        // funçaõ para pegar apartir de um ponto
print $resumi = mb_substr($texto, 2 , 10);

        //montra onde ta a ultima ocorrencia da string
print $ocorrencia = mb_strrpos($texto,'e');





// echo date('G:i'). " ";
// echo horario();
// echo resumirtexto('esse é o tetxo', 10);