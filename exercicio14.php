<?php

//Crie um array mult.
$usuario = [
    [   "Nome" => "Emanuelly Brandi",
        "Cidade" => "Cerquilho",
        "Estado" => "SP"],
    [   "Nome" => "Luiza Costa",
        "Cidade" => "Petrópolis",
        "Estado" => "RJ"],
    [   "Nome" => "Gabriel Augusto",
        "Cidade" => "Porto Alegre",
        "Estado" => "RS"],
    [   "Nome" => "Bruno Gabriel",
        "Cidade" => "Tiete",
        "Estado" => "SP"],
    [   "Nome" => "João Bastos",
        "Cidade" => "Niterói",
        "Estado" => "RJ"],
];

//Define a variavel.
$busca = "Emanuelly Brandi";

//exibe a estrutura do array.
echo '<pre>';
print_r($usuario);
echo '</pre>';


?>