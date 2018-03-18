<?php

/* 2. Esquema de recorregut d’una seqüència. 2.5.2. Suma de les xifres d’un número */

echo "Suma xifres de 7463: \n\r";

$n = 7463;
$d = $n % 10;
$suma = 0;

while(!($n == 0)) {

	$suma = $suma + $d;
	$n = (int) $n / 10;
	$d = $n % 10;

	echo "Suma: $suma | n: $n | d: $d\n\r";
}

echo "Suma: $suma";

