<?php
/* Determina si entre els 1000 primers nombres de Fibonacci n’hi ha algun que acabi en 9.*/

$trobat = false;
$actual= 0;
$seguent = 1;
$i = 1;

while($i <= 1000 && !$trobat) {

	$trobat = $actual % 10 == 9;
	
	if(!$trobat) {
		$seguent2 = $actual + $seguent;
		$actual = $seguent;
		$seguent = $seguent2;
		$i++;
		echo "$actual \n\r";
	}

}

if($trobat) {
	echo "Trobat: $actual";
} else {
	echo "Trobat:". -1;
}
