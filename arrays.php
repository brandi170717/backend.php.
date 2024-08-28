<?php

// Criando a array lista de fruta
$lista_frutas = array("Banana", "Maça", "Morango", "Uva", "laranja", "Mamão", "Abacaxi", "Pera", "Franboesa");

echo '<pre>';
print_r ($lista_frutas);
echo $lista_frutas[0]; //Isso mostraria: Morango.
echo "<hr>";
echo '</pre>';

echo '<pre>';
$lista_frutas[0] = "Melancia";
print_r ($lista_frutas);
echo '</pre>';

echo "<br>";
echo $lista_frutas[0];

?>