<?php

$multi = [['r1', 'r2'], ['c0', 'c1', 'c2']];


// Imprimindo matriz - Estatico
echo $multi[0][0]. 'x' .$multi[1][0]. ' | ';
echo $multi[0][0]. 'x' .$multi[1][1]. ' | ';
echo $multi[0][0]. 'x' .$multi[1][2];
echo '<br>';
echo $multi[0][1]. 'x' .$multi[1][0]. ' | ';
echo $multi[0][1]. 'x' .$multi[1][1]. ' | ';
echo $multi[0][1]. 'x' .$multi[1][2];
echo '<br>';

// Imprimindo matriz
for($x = 0; $x < 2; $x++) {

	for($y = 0; $y < 3; $y++) {

		echo "[$x][$y],";
		
	}
	echo '<br>';

}


$aluno1 = [
	'nome' => 'Celio',
	'sobrenome' => 'Junior',
	'email' => 'celiojunior@teste.com.br'
];
$aluno2 = [
	'nome' => 'Marcos',
	'sobrenome' => 'Laporta',
	'email' => 'marcoslaporta@teste.com.br'
];


$alunos = [
	$aluno1,
	$aluno2,
];
echo $alunos[1]['sobrenome'].'<br>';


echo "temos " . count($alunos) . " alunos<br>";

echo '<pre>';
for($posicao=0; $posicao < count($alunos); $posicao++) {
	echo "Aluno na posição: $posicao<br>";
	echo $alunos[$posicao]['nome'].'<br>';
	echo $alunos[$posicao]['sobrenome'].'<br>';
	echo $alunos[$posicao]['email'].'<br>';
}
echo '</pre>';