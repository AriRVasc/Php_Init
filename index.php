<?php
// index é responsável pela inicialização do sistema
require_once 'configuracao.php';
include_once 'helpers.php';

/*
echo '<hr>';
echo saudacao();
*/
echo '<hr>';

$string = 'texto para ser resumido';
$int = 10;
$float = 9.99;
$bool = false;
$nulo = null;

echo resumirTexto($string, $int);

?>