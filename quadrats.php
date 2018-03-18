<?php

/* Escriurem un algorisme que calculi els quadrats dels elements d’una taula
d’enters */

define("M", 5);
$taulaI = [];
$taulaF = [];

// Omplir taulaI
for($i = 1; $i <= M; $i++) {
	fscanf(STDIN, "%d\n\r", $taulaI[$i]);
}

echo "Valors TaulaI:\n\r";

// Escriure taulaI
for($i = 1; $i <= M; $i++) {
	echo $taulaI[$i]."\n\r";
}

$taulaF = quadrats($taulaI);

var_dump($taulaF);


function quadrats($p) {

	$novap = [];

	for($i = 1; $i <= M; $i++) {
		$novap[$i] = $p[$i] * 2;
	}

	return $novap;

}


