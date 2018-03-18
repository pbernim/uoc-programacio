<?php

/* Donada una seqüència de caràcters en majúscules i acabada en punt que llegirem
del canal d’entrada, es tracta d’obtenir la freqüència d’aparició de cada
lletra de l’alfabet. */

$c = fgetc(STDIN);
$ndc = 0;

$freq = [];
for($i = 1; $i <= 26; $i++) {
	$freq[$i] = 0.0;
}

$codiBas = ord('A');

while($c != '.') {

	$i = ord($c) - $codiBas + 1;
	$freq[$i] = $freq[$i] + 1.0;
	$ndc++; 
	$c = fgetc(STDIN);
}

for($i = 1; $i <= 26; $i++){

	$freq[$i] = $freq[$i] / floatval($ndc);
	echo chr($codiBas + $i - 1);
	echo ': ';
	echo $freq[$i];
	echo "\n\r";
}


