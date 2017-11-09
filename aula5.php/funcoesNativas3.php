<?php
echo '<pre>';

$vetor = array(1 => 'a',2 => 'b',3 => 'c', 4 => 'd');
print_r (array_keys($vetor));
echo '<br>';

print_r (array_values($vetor));
echo '<br>';
echo '</pre>';

print_r(sort($vetor));
echo '<br>';

$testo = array(1 => 'ab',2 => 'cd',3 => 'ef');
print_r (implode($testo));
$testo2 = ("ahgdouad");
print_r (explode($testo2));
?>