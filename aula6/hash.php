<?php

$string = 'exemplo';
echo md5($string);
echo '<br>';

echo sha1($string + rand());

echo '<br>';

echo crypt($string);

?>