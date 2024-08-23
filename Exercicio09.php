<?php

// faz a conta usando FOR 
for($i = 1; $i <= 50; $i++) {
    $resultado = round(sqrt($i,),2);
    echo "<br>";
    echo "A raiz é:";
    // chama/exibe o resultado 
    echo "$resultado ";
}
?>