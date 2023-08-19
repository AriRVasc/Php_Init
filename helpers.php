<?php


function saudacao(){
    return 'Good Morning';
}

//função retorna string
function resumirTexto(string $texto, int $limite, string $continue='...'): string 
{   //função trim remove espaços do incio e fim
    $textoLimpo = trim($texto);
    //verifica se o tamanho de $textoLimpo é maior ou igual o $limite
    if(mb_strlen($textoLimpo) <= $limite){
        //se verdade retornará o texto original
        return $textoLimpo;
    }
    //se falsa entra nesse bloco
    //mb_strrpos calcula a posição até o limite
    //mb_substr extrai o texto ate essa posição
    $resumirTexto = mb_substr($texto, 0, mb_strrpos
    (mb_substr($textoLimpo, 0, $limite), ''));
    
    //retorna $resumirTexto concatenada com continue
    return $resumirTexto.$continue;
}