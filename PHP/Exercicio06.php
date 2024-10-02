<?php
//chama asv variaves
$i = 30;
$contador = 1;
//usa o verdadeiro e falso 
if($i>0){
//usamos o while para fazer a sequencia
    while ($contador <= $i ){
        if ($contador  % 2 == 0)
        //chamamos a variavel para mostrar os resultados 
        echo "O contador par é: $contador<br>";
        $contador++;
    }
}

else{
    echo "Não é par";
}
//Emanuelly fez, Leticia ajudou

?>