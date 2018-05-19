<?php

$idade = 18;
$temhabilitacao = true;

if ($idade >= 18 && $temhabilitacao) {
	echo 'Pode dirigir';
}	else if ($idade >= 18) {
	echo 'Não pode dirigir, mas pode tirar habilitacao';
} else {
	echo 'Nao pode dirigir e nem tirar habilitacao';
}