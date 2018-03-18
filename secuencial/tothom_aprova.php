<?php
/* Si una sèrie de notes que es llegiran de l’entrada està formada exclusivament per aprovats. Ens asseguren que les notes de la sèrie seran caràcters del conjunt { “A”, “B”, “C”, “c”, “D” } i que darrere l’últim element de la sèrie hi haurà una “Z”. */

echo "Escribe una serie de notas: ";

$car = fgetc(STDIN);
$trobat = false;

while($car != 'Z' && !$trobat) {

	$trobat = $car == 'c' || $car == 'D';
	if(!$trobat) {
		$car = fgetc(STDIN);
	}

}

if($trobat) {
	echo "No";
} else {
	echo "Sí";
}