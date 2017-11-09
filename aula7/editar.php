<?php

//echo $_GET['id'];

// VERIFICAR SE O $_GET['id'] FOI PASSADO
if( isset($_GET['id']) ) {

	// SE FOI PASSADO, CRIAR CONEXAO COM O BANCO COM O pg_connect
	$psql = pg_connect("host=localhost dbname=projetodb user=jeffe password=adminn123");

	if(!empty($_POST)){

		$query = pg_query(
			$psql,
			 "UPDATE alunos SET nome='{$_POST['nome']}', sobrenome='{$_POST['sobrenome']}', email='{$_POST['email']}' WHERE id={$_GET['id']}");
		
		if( pg_affected_rows($query) > 0 ) {
			echo "Aluno alterado com sucesso";
		} else {
			echo "erro ocorrido";
		};

	}
	
	// EXECUTAR A QUERY COM O COMANDO pg_query()
	$query = pg_query($psql, "SELECT * FROM alunos WHERE id={$_GET['id']}");

	// VERIFICAR SE DEU SUCESSO OU NÃO
	if( pg_affected_rows($query) > 0 ) {
		
	    $aluno = pg_fetch_assoc($query);
	    var_dump($aluno);
 
	} else {
		echo "Usuário: {$_GET['id']} não existe.";
	}

}
//COM O GET

		// EXECUTAR A QUERY COM WHERE
	// COMANDO: pg_query()
	// ATENÇÃO: USAR $_GET['id']
	// QUERY +- =  SELECT * FROM alunos WHERE id=$_GET['ID']



	// VERIFICAR SE EXISTE O ALUNO
	// COMANDO: pg_affected_rows()
	// RETORNA O NUMERO DE LINHAS QUE FORAM ALTERADAS



	// PEGAR O RESULTADO DA CONSULTA
	// COMANDO: pg_fetch_assoc()
	// ATENÇÃO: Utilizamos assoc por ser só 1 aluno




//COM O POST

	// VERIFICAR SE O POST ESTA !VAZIO
	// COMANDO: !empty()

	// EXECUTAR A QUERY COM O
	// COMANDO: pg_query()
	// QUERY +- =  UPDATE alunos SET nome='$_POST['nome']'  WHERE  id=$_GET['id']


	// VERIFICAR SE O ALUNO FOI ALTERADO
	// COMANDO: pg_affected_rows()
	// RETORNA O NUMERO DE LINHAS QUE FORAM ALTERADAS




//HTML

// CASO O ALUNO EXISTA, MONTAR UM FORMULARIO COM OS DADOS
// PARA ADICIONAR VALOR A UM INPUT:



?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
	<div class="container">	
	<h1 style="text-align: center;">Editar aluno</h1>
	<form style="padding: 100px" method="POST" action="">
  <div class="form-group">
        <input  style="margin: 10px" class="form-control" value="<?=$aluno['nome']?>" id="exampleInputEmail1" placeholder="nome" name="nome">
    <input style="margin: 10px" class="form-control" value="<?=$aluno['sobrenome']?>" id="exampleInputEmail1" placeholder="sobrenome" name="sobrenome">
    <input style="margin: 10px" class="form-control" value="<?=$aluno['email']?>" id="exampleInputEmail1" placeholder="Email" name="email">
    <button style="float: right;" type="submit" class="btn btn-primary">enviar</button>
  </div>
  	</form>
	</div>
</body>

</html>

