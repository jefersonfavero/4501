<?php

$vetor1 = array('1','2','3');
$vetor2 = array('um','dois','tres');
$vetor3 = array_combine($vetor1, $vetor2);

print_r ($vetor3);

echo '<br>';
array_count_values($vetor1);
print_r ($vetor1);

echo '<br>';

$vetor4 = array("a" => "amor","paixao","carinho","saudade");
$vetor5 = array("b" => "amor","paixao","saudade");
$resultado = array_diff($vetor4, $vetor5);
print_r ($resultado);

echo '<br>';


?>