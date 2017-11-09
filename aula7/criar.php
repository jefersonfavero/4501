<?php

var_dump($_GET);



/*if(isset($_GET['id'])){
$psql = pg_connect("host=localhost dbname=projetodb 
	user=jeffe password=adminn123");
$query = pg_query($psql, "INSERT FROM alunos WHERE id={$_GET['id']}");
*/
if(!empty($_POST)){ 
	$psql = pg_connect("host=localhost dbname=projetodb 
		user=jeffe password=adminn123");
	$query = pg_query_params(
		$psql,
		"INSERT INTO alunos (nome, sobrenome, email) VALUES ($1, $2, $3)",
		[
			$_POST['nome'],
			$_POST['sobrenome'],
			$_POST['email']
		]
	);
}else {
	echo "Usuario: {$_POST['id']} favor colocar informacoes.";
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
	<h1 style="text-align: center;">Criar aluno</h1>
	<form style="padding: 100px" method="POST" action="">
  <div class="form-group">
        <input  style="margin: 10px" class="form-control" id="exampleInputEmail1" placeholder="nome" name="nome">
    <input style="margin: 10px" class="form-control" id="exampleInputEmail1" placeholder="sobrenome" name="sobrenome">
    <input style="margin: 10px" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
    <button style="float: right;" type="submit" class="btn btn-primary">enviar</button>
  </div>
  	</form>
	</div>
</body>

</html>