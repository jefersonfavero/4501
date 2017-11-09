<?php

//echo $_GET['id'];

if(isset($_GET['id'])){
$psql = pg_connect("host=localhost dbname=projetodb 
	user=jeffe password=adminn123");
$query = pg_query($psql, "DELETE FROM alunos WHERE id={$_GET['id']}");
If(pg_affected_rows($query) > 0){ 
	echo "Usuario: {$_GET['id']} deletado com sucesso.";
}else {
	echo "Usuario: {$_GET['id']} nao existe.";
} 







//Verificar se o $_GET['id'] foi passado

//Se foi passado, criar conexao o banco com o pg_connect

//Executar a query com o comando pg_query()


//Verificar se deu sucesso ou nao

//Imprimir algo na tela falando o resultado

} 
?>