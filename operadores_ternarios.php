<?php


// Exemplo com variavel nome 
$nome = "Emanuelly";
$mensagem = ($nome == "Emanuelly") ? "Olá, Emanuelly." : "Olá, visitante.";
echo $mensagem; // Saída: nome
echo '<br>';


// Exemplo com variavel numerico 
$idade = 20;
$mensagem = ($idade >=18) ? "Maior de idade." : "Menor de idade.";
echo $mensagem; // Saída: idade
echo '<br>';

// Exemplo com variavel true 
$is_logged_in = true;

$mensagem = $is_logged_in ? 'Bem Vindo de volta!' : 'Por favor, faça login.';
echo $mensagem; //Saída: True

?>