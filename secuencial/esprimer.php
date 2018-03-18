<?php
/* Determina si un nombre enter positiu és primer o no i retorni cert en cas afirmatiu i fals en cas contrari. */

echo "Escribe un número entero mayor de 1: ";

fscanf(STDIN, "%d\n\r", $n);

echo esPrimer($n) ? "$n es número primo" : "$n no es número primo";

function esPrimer($n) {
	
	$i = 2;
	$trobat = false;

	while($i < $n && !$trobat) {

		if($n % $i == 0) {
			$trobat = true;
		} else {
			$i++;
		}

	}

	$primer = !$trobat;

	return $primer;

}