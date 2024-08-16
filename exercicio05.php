<?php

// Exercicio 05. = Tabuada 

// Define a tabuada 
function tabu($n) {
        for ($i = 0; $i <= 10; $i++) {
            $resultado = $n * $i;
            echo "$n x $i = $resultado<br>";;
        }
    
}

// Chama a tabuada 
$n = 3;
tabu($n); //Saída da Tabuada


?>