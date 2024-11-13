<?php
require_once('class_pessoa.php');
$p01 = new Pessoa();
$p01->nome = "João";
$p01->idade = 40;
// $p01->endereco = "Rua Gabriel Rocha, 333, Tatui-SP";
// $p01->CPF =355617179-21 ;

$p01->apresentar();
echo "<hr>";
$p01->caminhar();
echo "<hr>";
$p01->falar();
echo "<hr>";
$p01->simularcomer();
echo "<hr>";
$p01->simulardormir();
echo "<hr>";
?>