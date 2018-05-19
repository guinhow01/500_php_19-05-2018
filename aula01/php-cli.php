<?php 

//CLI - Command Line Interface
// Interface de Linha de Comando

$nota = readline('Digite sua nota: ');
$frequencia = readline('Digite sua frequencia: ');
var_dump($nota);
if ($nota >= 7 && $frequencia >= 8) {
	echo "Aprovado" . PHP_EOL;
}	else if ($nota >= 5 OR $nota < 7 && $frequencia >= 8) {
	echo "Recuperacao" . PHP_EOL;
} else {
	echo "Reprovado" . PHP_EOL;
}
