<?php

//Crie um array mult.
$usuario = [
    [   "id" => 1,
        "nome" => "João",
        "email" => "joao@example.com"],
    [   "id" => 2,
        "nome" => "Maria",
        "email" => "maria@example.com"],
    [   "id" => 3,
        "nome" => "Pedro",
        "email" => "pedro@example.com"],   
];

//Define a variavel.
$busca = "pedro@example.com";

//exibe a estrutura do array.
echo '<pre>';
print_r($usuario);
echo '</pre>';

echo '<hr>';

//Procura valor.
//$usuario, especificamente no campo 'nome'. 
$indice = array_search($busca, array_column($usuario, 'email'));

//Verifica
//$busca foi encontrado no array. 
if ($indice !== false) {
//Se o valor for encontrado, exibe ID.
    echo "$busca foi encontrado com o ID: " .$usuario[$indice]['id'];
}else{
//Se o valor não for encontrado, exibe ID.
    echo"$busca não foi encontada na lista de usuarios.";
}
 ?>