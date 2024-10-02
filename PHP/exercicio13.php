<?php
 
//Crie uma array.
$nomes = array("Emanuelly", "Emanuela", "Leticia", "Nathan", "Daniel", "Ana Vitoria", "Felipe", "Enzo", "Yuri", "Maria");

//Crie um valor;
$nome_valor = "Emanuela";

//Procure o valor.
$indice_1 = array_search("$nome_valor", $nomes);

//Verifique se está na lista.
if ($indice_1 !== false) {

//Se estiver na lista, exiba uma mensagem.
    echo "$nome_valor. Este nome foi encontrado na base de dados. Na posição " .$indice_1;    
    
}else{
    
 //Se não estiver na lista, exiba uma mensagem.
     echo "$nome_valor. Este nome não foi encontrado na base de dados.";    
}
?>