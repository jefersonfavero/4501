<?php

function teste($num1,$num2,$operador){
	
	if ($operador == '+') {
		return $num1 + $num2;
		elseif ($operador == '-'){
			return $num1 - $num2;
			elseif ($operador == '/'){
				return $num1 * $num2;
				else {
					return $num1 \ $num2;
				}
			}
		}
	}

	return;
}

echo teste (5,6,'+');

?>