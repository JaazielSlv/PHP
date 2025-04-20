<?php 
//Ler arquivos CSV

function lerCsv($nome_Aquivo)
{   $Usuarios = [];
    if(file_exists($nome_Aquivo)):
        $abrir_arq = fopen($nome_Aquivo, 'r');
        while (($linha = fgetcsv($abrir_arq, 0 , ',')) !== false)
        {
            $Usuarios[] = $linha;
        }
        fclose($abrir_arq);
    else:
        echo "Arquivo não encontrado";
    endif;
    return $Usuarios;
}

$nome_Aquivo = "Usuarios.csv";

$mostrar = lerCsv($nome_Aquivo);

if(count($mostrar)> 0):
    echo "Dados encotrados \n";
    foreach($mostrar as $dados)
    {
        echo implode(' , ',$dados) ."\n";
    }
else:
    echo "Não tem dados";
endif;



?>