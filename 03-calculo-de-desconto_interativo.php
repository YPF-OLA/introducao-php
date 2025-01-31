<?php
// Entradas direta, atribuída 

$produto = readline("Informe o produto: ");
$precoInicial = readline("Preço inicial: ");
$desconto = readline("Desconto em reais: ");


// Processamento
$precoFinal = $precoInicial - $desconto;

// Saída
 echo "O Preço final é: ". $precoFinal;