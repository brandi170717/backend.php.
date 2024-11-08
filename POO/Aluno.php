<?php
require_once('class_Aluno.php')

$aluno01 = new Aluno();

$aluno01->nome = "João";
$aluno01->idade = 07;
// $aluno01->matricula = "12345";
// $aluno01->turma = "2B";
$aluno01->estudar();
echo "<hr>";

$aluno01->fazerProva();
echo "<hr>";

$aluno01->assistirAula();
echo "<hr>";

$aluno01->simularEntregaDeTrabalho();
echo "<hr>";

$aluno01->simularFaltarAula();
echo "<hr>";

?>