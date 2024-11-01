
EMANUELA GALINDO DE SOUZA LUIZ
10:28 (há 2 minutos)
para mim

<?php

//Modelo -> Entidade
class Funcionario{

    //Atributos -> Caracteristicas
public $nome = null;
public $telefone = null;
public $numfilhos = null;

//setters
function setNome ($nome){
    $this->nome = $nome;
}

function setFilhos ($numfilhos){
    $this->numfilhos = $numfilhos;
}

//getters
function getNome (){
   return $this->nome;
}

function getFilhos (){
    return $this->numfilhos;
}

function resumirCadFunc(){
    //Esse é o resumo do cadastro do funcionario
    return "$this->nome possui $this->numfilhos filho(s)";
}
}

$y = new Funcionario();
$y ->setNome("Manu");
$y ->setFilhos(2);
echo $y -> getNome(). ' possui ' .$y -> getFilhos(). ' filho(s) ';


?>