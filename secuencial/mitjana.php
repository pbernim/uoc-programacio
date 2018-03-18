<?php

/* Calcula la mitjana aritmètica d’una sèrie de nombres reals que es llegiran de l’entrada. Darrere de l’últim element de la sèrie hi haurà un 0.0 */

fscanf(STDIN, "%f\n\r", $x);
$n = 0;
$sum = 0.0;

while($x <> 0.0) {

	$sum = $sum + $x;
	$n++;
	fscanf(STDIN, "%e\n", $x);
}

echo sprintf('Suma: %f | Media: %f', $sum, $sum / sprintf("%.2f", $n) );