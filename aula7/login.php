<?php
	if(!empty($_POST)){ 
		$psql = pg_connect("host=localhost dbname=projetodb 
			user=jeffe password=adminn123");
		$query = pg_query($psql,"SELECT * FROM usuarios WHERE email='{$_POST['email']}' and senha='{$_POST['senha']}'");
		if( pg_affected_rows($query) > 0 ) {

				$_session('LOGADO') = 'TRUE';
			} else {
				echo "erro email ou senha";
			};

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
	<h1 style="text-align: center;">Entre com seu email e senha</h1>
	<form style="padding: 100px" method="POST" action="">
  <div class="form-group">
    <input  style="margin: 10px" class="form-control" id="exampleInputEmail1" placeholder="email" name="email">
    <input style="margin: 10px" class="form-control" id="exampleInputSenha" placeholder="senha" name="senha">
    <button style="float: right;" type="submit" class="btn btn-primary">enviar</button>
  </div>
  	</form>
	</div>
</body>

</html>