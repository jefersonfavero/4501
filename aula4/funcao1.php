<?php


function fala(){
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

$alunos = [$aluno1,$aluno2];	

foreach ($aluno1 as $key => $value){
	echo "Chaves: $key, valor: $value<br>";
}

echo '<pre>';
foreach ($alunos as $aluno){
	echo $aluno['nome'];
	echo '<br>';
	echo $aluno['sobrenome'];
	echo '<br>';
	echo $aluno['email'];
}

echo '</pred>';;
}
fala();

?>