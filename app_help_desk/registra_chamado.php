<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";

$Personagem = $_POST['Personagem'];

$Livro_Filme = $_POST['Livro_Filme'];

$Descricao = $_POST['Descricao'];

$texto = $Personagem. ' # ' .$Livro_Filme. ' # ' .$Descricao.PHP_EOL;

echo $texto;

$arquivo = fopen('registro.txt' , 'a');

fwrite($arquivo, $texto);

fclose($arquivo);

header('location:painel.php');
?>