<?php 

$num1 = 5;
$num2 = 4;

$mult = $num1 * $num2; //multiplicacao
$adic = $num1 + $num2; //adicao
$subt = $num1 - $num2; //subtracao
$divi = $num1 / $num2; //divisao
$modu = $num1 % $num2; //restante da divisao

echo $mult;
echo '<br>';
echo $adic;
echo '<br>';
echo $subt;
echo '<br>';
echo $divi;
echo '<br>';
echo $modu;

echo '<br>';

$number = 1; //a variavel numero recebe 1
echo '<br>';
echo $number;
$number += 2; //somamos 2 a variavel
echo '<br>';
echo $number;
$number -= 2; // subtraimos 2 a variave
echo '<br>';
echo $number;
$number *= 2; //multiplicamos a 2 a variavel
echo '<br>';
echo $number;
$number /= 2; //dividimos por 2 a variavel
echo '<br>';
echo $number;
$number %= 2; //resto da divisao por 2
echo '<br>';
echo $number;

$num = 1;
echo '<br>';
echo '<br>';
echo ++$num; // 
echo '<br>';
echo $num++; //
echo '<br>';
echo --$num; //
echo '<br>';
echo $num--; //
echo '<br>';
echo $num;
echo '<br>';

if (true == 1) {
	echo 'true é igual a 1';
} else {
	echo 'true nao é identico a 1';
}
echo '<br>';
$i = 10;
if ($i < 10) {
	echo 'É menor que 10';
} elseif ($i > 10) {
	echo 'É maior que 10';
} else {
	echo 'É 10';
}

echo '<br>';
//echo 'escapar teste';
//$teste_espacar = teste__escapar;
//echo "$teste_espacar";

$i2 = 10;
if ($i2 < 10) {
	echo 'É menor que 10!';
} elseif ($i2 > 10) {
	echo 'É menor que 10!';
} else {
	echo 'É 10!';
}
echo '<br>';
//require_once 'teste.php';

?>