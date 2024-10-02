<?php

//Crie uma array lista_frutas.
$lista_frutas = ['Morango', 'Abacaxi', 'Maçã', 'Pera'];

//Crie uma array lista_coisas.
$lista_coisas = [
    'Frutas' => $lista_frutas,
    'Pessoas' => ['João', 'Maria', 'Pedro', 'Ana']
];

//Imprimir.
echo '<pre>';
print_r($lista_coisas);
echo '</pre>';

?>