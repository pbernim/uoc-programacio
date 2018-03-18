<?php

/* Compti quantes vegades apareix la lletra “a” en una frase acabada amb un punt */

echo "Escribe una frase acabada con un punto\n\r";
$car = fgetc(STDIN);
$n = 0;

while($car != '.') {

	if($car == 'a') {
		$n++;
	}

	$car = fgetc(STDIN);

}

echo "Total letras a: ".$n;
