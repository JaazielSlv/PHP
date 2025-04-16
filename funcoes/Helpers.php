<?php 

function horario()
{
    $hora = date('H;s');
    if($hora >= 0 AND $hora <= 5) {
        $saudacao = 'esta de madrugada';
    } elseif($hora >= 6 AND $hora <= 12){
        $saudacao = 'esta de manha';
    }elseif($hora >= 13 AND $hora <= 18){
        $saudacao = 'esta de tarde';
    }else {
        $saudacao = 'esta de noite';
    }

    return $saudacao;
}

function resumirtexto(string $texto, int $limite, string $continue = '...')
{
    $texto_limpo = trim($texto);
    if(mb_strlen($texto_limpo) <= $limite){
        return $texto_limpo;
    }
    $resumo_txt = mb_substr($texto_limpo, 0, mb_strrpos(mb_substr($texto_limpo, 0, $limite), ''));

    return $resumo_txt.$continue;

}

?>