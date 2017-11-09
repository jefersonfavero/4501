<<?php 

$inteiro = 1;

$double = 1.2;

$string = 'um';

$boolean = true; // true ou falso

echo $inteiro;
echo '<br>';
echo $double;
echo '<br>';
echo $string;
echo '<br>';
echo $boolean;
echo '<br>';

echo $boolean = (int) true;
echo $boolean = (string) true;
echo $boolean = (double) true;

$variavel = 'carro';
$$variavel = 'camaro';

echo $carro;

define('nome_da_constante', 5);
define('nome_da_constante_string', 'constante');
echo '<br>';
echo nome_da_constante;
echo '<br>';
echo nome_da_constante_string;

echo 'teste de string';
echo '<br>';
$a = 10;
$stringliteral1 = 'o valor de $a e: ' . 'e ' . $a;
$stringliteral2 = "o valor davariavel a e: $a";

echo $stringliteral1;
echo '<br>';
echo $stringliteral2;
echo '<br>';

$certi = "Zend";

$curso = <<< TEXTO
<pred> Estou me preparando para a $certi com a formacao da 4 linux; </pred>

TEXTO;

echo '<br>';

$nowdoc = <<< TEXTO
<pred> Estou me preparando para a $certi com a formacao da 4 linux; </pred>
TEXTO;

echo $curso;
echo $nowdoc;
 ?>