<?php
/* Esbrina si en una frase acabada en punt apareix alguna lletra “a” */

echo "Escribe una frase acabada con un punto: ";

$car = fgetc(STDIN);
$trobat = false;

while($car != '.' && !$trobat) {

	$trobat = $car == 'a';
	if(!$trobat) {
		$car = fgetc(STDIN);
	}

}

if($trobat) {
	echo "Sí aparece la leta 'a'";
} else {
	echo "No aparece la letra 'a'";
}

