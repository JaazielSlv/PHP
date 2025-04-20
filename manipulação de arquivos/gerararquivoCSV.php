<?php 
//Manipulação de arquivo php

function gerar_Arquivo_CSV($nome_Arquivo, $usuarios)
{
    //veificar se os dados existem 
    if(count($usuarios) > 0):
        $escreverCsv = fopen($nome_Arquivo, "w");
        foreach($usuarios as $dados ){
            //função para escrever em arquivos 
            fputcsv($escreverCsv, $dados);
        }
        //fecha o arquivo
        fclose($escreverCsv);
    else:
        echo "Sem dados";
    endif;
}


$usuarios = [
    ["nome", "idade", "E-mail"],
    ["João", 33, "joão@gmail.com"],
    ["Maria", 24, "maria@gmail.com"],
    ["Jjantony", 45, "jantony@hotmail.com"],
    ["Lucas", 30, "lucas@gmail.com"],
];

$nome_Arquivo = "Usuarios.csv";


gerar_Arquivo_CSV($nome_Arquivo,$usuarios);



?>