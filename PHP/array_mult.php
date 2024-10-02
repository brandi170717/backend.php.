<?php

//Criando a Array Lista_coisas.
$lista_coisas = [];

//Criando uma Array frutas, dentro da Array lista_coisas.
$lista_coisas ['frutas'] = ['Banana', 'Maçã', 'Morango', 'Uva'];

//Criando uma Array pessoas, dentro da Array lista_coisas.
$lista_coisas['pessoas'] = ['João', 'José', 'Maria'];

//Alterando o terceiro valor da array FRUTAS.
$lista_coisas['frutas'][2] = 'Abacaxi';

//Alterando o segundo valor da array PESSOAS.
$lista_coisas['pessoas'][1] = 'Carlos';

echo "O terceiro valorda array FRUTAS agora é: ";
echo $lista_coisas['frutas'][2];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';

echo "<hr>";

echo "O segundo valor da Array PESSOAS agora é: ";
echo $lista_coisas['pessoas'][1];

echo '<pre>';
print_r($lista_coisas);
echo '</pre>';


?>