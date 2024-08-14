<?php

$corEscolhida = "vermelho";

switch ($corEscolhida) {
    case "vermelho":
        echo "Você escolher a cor: vermelha";
        break;

    case "azul";
        echo "Você escolheu a cor: azul";
        break;

    case "verde";
        echo "Você escolheu a cor: verde";
        break;
        
    default:
        echo "Cor não disponível";
        break;  
}
?>