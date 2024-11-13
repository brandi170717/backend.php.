<?php
require_once('class_coordenador.php');
$p01 = new Coordenador();
$p01->nome = "Ricardo";
$p01->departamento = 44;
// $p01->salario = "3456,90";
// $p01->CPF =351087179-21 ;

$p01->cordenarTurmas();
echo "<hr>";
$p01->planejarAulas();
echo "<hr>";
$p01->auxiliarProfessores();
echo "<hr>";
$p01->simularDefinirHorario();
echo "<hr>";
$p01->simularorganizarReunioes();
echo "<hr>";
?>