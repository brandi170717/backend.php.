<?php
require_once('class_professor.php');
$p01 = new Professor();
$p01->nome = "Pedro";
$p01->diciplina = "Matematica";
// $p01->salario = 2000,00;
// $p01->CPF = 12345678900 ;

$p01->ensinar();
echo "<hr>";
$p01->corrigirProva();
echo "<hr>";
$p01->prepararAula();
echo "<hr>";
$p01->simularFazerChamada();
echo "<hr>";
$p01->simularCorrigirTarefa();
echo "<hr>";
?>