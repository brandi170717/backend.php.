<?php
//Criando a Array cadastro.
$cadastro = [];

//Criando uma Array nome, dentro da Array Cadastro.
$cadastro['nome'] = ['João', 'Maria', 'Julia', 'Pedro', 'Gabi'];

//Criando uma Array email, dentro da Array Cadastro.
$cadastro ['email'] = ['joao@gmail.com', 'maria@gmail.com', 'julia@gmail.com', 'pedro@gmail.com', 'gabi@gmail.com'];

echo '<pre>';
print_r($cadastro);
echo '</pre>';

echo "<hr>";

//Alterando o terceiro valor da array NOME.
$cadastro['nome'][2] = 'Senai';

//Alterando o segundo valor da array EMAIL.
$cadastro['email'][1] = 'aluno@gmail.com';

echo "O terceiro valorda array Pessoa agora é: ";
echo $cadastro['nome'][2];

echo "<br>";

echo "O segundo valor da Array Email agora é: ";
echo $cadastro['email'][1];

echo '<pre>';
print_r($cadastro);
echo '</pre>';
?>