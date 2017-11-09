<?php

echo '<pre>';

$psql = pg_connect("host=localhost dbname=projetodb 
	user=jeffe password=adminn123");

//var_dump($psql);

$query = pg_query($psql, 'select * from alunos');

$alunos = pg_fetch_all($query);
//var_dump(pg_fetch_all($consulta));

foreach ($alunos as $aluno) {
	echo $aluno['id'];
	echo '<br>';
	echo $aluno['nome'];
	echo '<br>';
	echo $aluno['sobrenome'];
	echo '<br>';
	echo $aluno['email'];
}

?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<table class="table">
			<caption>Optional table caption.</caption>
			<thead>
				<tr>
					<th>#</th>
					<th>ID</th>
					<th>Nome</th>
					<th>Sobrenome</th>
					<th>acoes</th>
				</tr>
			</thead>
			<tbody>
			    <!--<?php
				foreach ($alunos as $aluno) {
					echo "<tr>";
					echo "<td>{$aluno['id']}</td>";
					echo '<br>';
					echo "<td>{$aluno['nome']}</td>";
					echo '<br>';
					echo "<td>{$aluno['sobrenome']}</td>";
					echo '<br>';
					echo "<td>{$aluno['email']}</td>";
					echo "</tr>";
				}
				?>-->
				<?php foreach ($alunos as $aluno) : ?>
				
				<tr>
					<td><?= $aluno['id'] ?></td>
					<td><?= $aluno['nome'] ?></td>
					<td><?= $aluno['sobrenome'] ?></td>
					<td><?= $aluno['email'] ?></td>
				<td>
					<a class="btn btn-primary" href="editar.php?id=<?=$aluno['id']?>">
					Editar</a>
					<a class="btn btn-danger" href="deletar.php?id=<?=$aluno['id']?>">
					Deletar</a>
				</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>

</html>