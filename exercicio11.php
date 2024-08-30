<?php
//Criando a Array Lista_coisas.
$cadastro = [];

//Criando uma Array pessoas, dentro da Array Cadastro.
$cadastro['usuario'] = ['João', 'Maria', 'Pedro'];

//Criando uma Array usuario, dentro da Array Cadastro.
$cadastro ['senha'] = ['1234', 'abcd', '5678'];

echo '<pre>';
print_r($cadastro);
echo '</pre>';

echo "<hr>";

//Alterando o terceiro valor da array USUARIO.
$cadastro['usuario'][1] = 'Ana';

//Alterando o segundo valor da array SENHA.
$cadastro['senha'][1] = 'efgh';

echo "O terceiro valorda array USUARIO agora é: ";
echo $cadastro['usuario'][1];

echo "<br>";

echo "O segundo valor da Array SENHA agora é: ";
echo $cadastro['senha'][1];

echo '<pre>';
print_r($cadastro);
echo '</pre>';
?>