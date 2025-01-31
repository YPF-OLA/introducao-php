<?php
// Entradas direta, atribuída 

$curso = readline("Qual nome do curso? ");
$cargaHoraria = readline("Carga horária do curso? ");



// Processamento
$faltasPermitidas = $cargaHoraria *0.25 ;

// Saída
// echo "O curso ".$curso." tem uma carga horária de ".$cargaHoraria."h, com limite de faltas permitidas de ".$faltasPermitidas;

echo "\nO curso ".$curso;
echo "\ncarga horária de ".$cargaHoraria."h \n";
echo "limite de faltas permitidas de ".$faltasPermitidas."h";

// \n é usado para "QUEBRA LINHA" ou "NOVAS LINHAS".