<?php

//Crie uma array.
$frutas = array("Maça", "Banana" , "Laranja");

//Crie um valor;
$valor = "Abacaxi";

//Verifique se banana está na lista.
if (in_array("$valor", $frutas)) {

//Se banana estiver na lista, exiba uma mensagem.
    echo "$valor está na lista de frutas.";    

}else{

//Se banana não estiver na lista, exiba uma mensagem.
    echo "$valor não está na lista de frutas.";    
}


?>