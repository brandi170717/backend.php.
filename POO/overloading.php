<?php

//Modelo -> Entidade
class Funcionario{

    //Atributos -> Caracteristicas
public $nome = null;
public $telefone = null;
public $numfilhos = null;
public $cargo = null;
public $salario = null;

//setters OVEROADING
function __set($atributos, $valor){
    $this->$atributos = $valor;
}

//getters OVEROADING
function __get ($atributos){
    return $this->$atributos;
}


function resumirCadFunc(){
    //Esse é o resumo do cadastro do funcionario
    return $this->__get('nome'). " possui " .$this->__get(' numfilhos '). " filho(s) ";
}
}

$y = new Funcionario();
$y ->__set('nome', " Manu ");
$y ->__set( " numfilhos " ,' 2 ');
echo $y ->resumirCadFunc();


?>