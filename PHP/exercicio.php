<?php
// Declara a variável
$nota1 = '9';
$nota2 = '10';
$nota3 = '8';
// Chama elas 
echo "A primeira nota é = $nota1 <br>";
echo "A segunda nota é = $nota2 <br>";
echo "A terceira nota é = $nota3 <br>";

$media = ($nota1 + $nota2 + $nota3)/3;

echo "Sua nota é: $media <br>";
if ($media <7 ){;
    echo "Você foi reprovado";    
}else{
    echo "Você foi aprovado";
}

<br>


?>