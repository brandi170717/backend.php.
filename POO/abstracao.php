<?php
//Modelo -> Entidade

class Funcionario{

//Atributos -> Caracteristicas
public $nome = 'Mnau';
public $telefone = null;
public $numFilhos = 4;

//Metodo -> Ações
    function resumirCadFunc(){
    // "Esse é o resumo do cadastro do funcionario";    
    return "$this->nome possui $this->numFilhos filho(s)";
    }


    function modificadNome($AlterarNome){
        $this->nome = $AlterarNome;

    }

}


//Objeto -> Identidade
$y = new Funcionario();
echo $y->resumirCadFunc();
echo "<hr>";
// $x = new Funcionario();
$y->modificarNumFilhos(3);
echo $y->resumirCadFunc();
echo "<hr>";

$x = new Funcionario();
$x->modificarNome("Emanuelly");
echo $x->resumirCadFunc();
echo '<hr>';


?>
