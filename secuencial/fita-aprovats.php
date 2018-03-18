<?php
/* Ens demanen un algorisme que ens indiqui si el nombre d’aprovats d’una sèrie de notes ordenada descendentment que es llegeix de l’entrada supera una fita determinada, que també s’ha de llegir. Ens asseguren que les notes de la sèrie seran caràcters del conjunt { “A”, “B”, “C”, “c”, “D” } i que darrere l’últim element de la sèrie hi haurà una “Z”. */

echo "Escriu el nombre de la fita: ";
fscanf(STDIN, "%d\n\r", $fita);

echo "Escribe las notas: ";
$car = fgetc(STDIN);

$trobat = false;
$n = 0;

while($car != 'Z' && !$trobat) {

	$trobat = $car == 'c' || $car == 'D' || $n >= $fita;

	if(!$trobat) {		
		$n++;
		$car = fgetc(STDIN);			
	}

}

if($n >= $fita) {
	echo "$n aprovados, NO es inferior a $fita ";
} else {
	echo "$n aprovados, SI es inferior a $fita.";
}