<?php

//Crie uma array.
$frutas = array("Maça", "Banana" , "Laranja");

//Crie um valor;
$valor = "Maça";

//Procure o valor.
$indice = array_search("$valor", $frutas);

//Verifique se banana está na lista.
if ($indice !== false) {

//Se banana estiver na lista, exiba uma mensagem.
    echo "$valor está na lista de frutas." .$indice;    
    
}else{
    
 //Se banana não estiver na lista, exiba uma mensagem.
     echo "$valor não está na lista de frutas.";    
}
?>