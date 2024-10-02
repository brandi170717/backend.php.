<?php

// Atividade 04. 

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
    echo ($i % 2 != 0) ? ' (ímpar)' : ' (Par)';
    echo " - ";

    switch (true) {
        case ($i >= 1 && $i <= 3):
            echo 'Baixo';
            break;

        case ($i >= 4 && $i <= 7):
            echo 'Médio';
            break;

        case ($i >= 8 && $i <= 10):
            echo 'Alto';
            break;    

    }

    echo '<br>';

}


?>