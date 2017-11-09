<?php

$saldo = 100;
$saque = 10;

$total = $saldo - $saque;
if ($saque < $saldo) {
	echo "Saque efetuado. Seu saldo é: R$ $total";
} elseif ($saque == $saldo){
	echo "Voce esta pobre. Seu saldo é: R$ $total";
} else {
	echo "Saldo insuficiente. Seu saldo é: $saldo";
}

?>