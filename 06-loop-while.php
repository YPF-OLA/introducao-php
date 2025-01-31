<?php
/* Loop WHILE (ENQUANTO) 

// Exemplo 1: contagem de 1 até 10

$i = 1; // variável de controle de interação/repetição

while ($i <= 10) {
	echo $i."\n";
	//$i = $i + 1;
	$i++;
}

echo "\n\n"; */

// Exemplo 2: obter/exibir nome e idade de 3 pessoas

$i = 1;

while ($i <= 3) {
  $nome = readline ("Qual é seu nome? ");
  $idade = readline ("Qual é sua idade? ");
	
	// Saída 
	echo "\n";
	echo $nome." tem ".$idade." anos.\n\n";
	
	$i++;
}

