<?php
// define a variável 
$compra= '500';
$desconto= '10';
$vip= '1';

// chama a variável 
echo "sua compra foi de $compra <br>";

// faz verdadeiro ou falso 
if($compra>=500.00){
    echo"cliente com desconto de $desconto %";
}else if ($vip= 1){
    echo"cliente com desconto de $desconto %";
}else{
// informa o cliente 
    echo"cliente sem desconto";
}
?>