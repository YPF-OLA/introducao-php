<?php
/* loop do/while (semelhante ao repita) */

$i = 1;

do {
	$numero = readline("Informe número: ");
	
	$resultado = $numero * 3;
	
	echo "\n".$resultado."\n\n";
	
	$i++;
	
} while($i <= 3);
