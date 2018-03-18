<?php
/* Suposem que disposem una seqüència d’enters amb les qualificacions de 50 estudiants d’una assignatura en el dispositiu d’entrada. Ens demanen que en calculem la nota mitjana i el nombre d’estudiants que tenen una nota inferior a aquesta mitjana. El darrer element de la seqüència és un −1 */

define("M", 5);
$t = [];

fscanf(STDIN, "%d\n\r", $n);
$quants = 0;
$suma = 0;

while($n <> -1) {
	$quants++;
	$t[$quants] = $n;
	$suma = $suma + $t[$quants];
	fscanf(STDIN, "%d\n\r", $n);
}

$mitjana = floatval($suma) / floatval($quants);

$infMitjana = 0;

for($i = 1; $i <= $quants; $i++) {
	if(floatval($t[$i]) < $mitjana) {
		$infMitjana++;
	}
}

echo "Mitjana: $mitjana | infMitjana: $infMitjana";
