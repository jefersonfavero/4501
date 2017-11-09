<?php

$string1 = "jeferson";
echo strtoupper($string1);

$string2 = "FAVERO";
echo strtolower($string2);

$string3 = "vieira";
echo ucfirst($string3);

echo '<br>';
echo ucwords("teste1");
echo '<br>';
echo strlen("teste2");
echo '<br>';
$strpad = str_pad("teste de texto",3);
var_dump($strpad);

echo '<br>';
echo strtoupper(strtolower("JEfe"));
echo '<br>';
echo str_repeat("je",10);
echo '<br>';
echo str_replace("jef","fav","jeffav");
echo '<br';
//echo substr("0123456789", 2, -4);
echo strpos('0123456789','');
echo '<br>';
echo strstr();
echo '<br>'
echo trim();
?>