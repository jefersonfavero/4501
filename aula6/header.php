<?php
setcookie( 'nomedocookie', 'valordocookie' ,time()+300);
setcookie( 'nomedocookie1', 'valordocookie' ,time()+300);
setcookie( 'nomedocookie2', 'valordocookie', time()+300);
foreach ($_COOKIE as $chave => $valor){

echo $chave;

echo $valor;
echo '<br>';
}


//header('Location: http://www.google.com/');
//exit;

?>