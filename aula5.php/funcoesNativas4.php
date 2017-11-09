<?php
$teste = (1);

//var_dump (isset($teste));

$array = array('isto','TES');
var_dump (is_array($array));
echo '<br>';
var_dump (is_int($teste));
var_dump(gettype($teste));

echo '<br>';

$array = array('Luke', 'Leia', 'han solo', array('Vader','Storm'));
var_dump (serialize($array));


?>