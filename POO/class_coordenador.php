<?php
class Coordenador{
    //Variaveis.
    public $nome;
    public $departamento;
    private $CPF;
    protected $salario;
    //Método.
    public function cordenarTurmas(){
        echo "$this->nome cordenando turmas.";
    }
    public function planejarAulas(){
        echo "$this->nome está planejando aulas.";
    }
    public function auxiliarProfessores(){
        echo "$this->nome está auxiliando os professores.";
    }
    private function definirHorario(){
        echo "$this->nome está definindo horarios.";
    }
    private function organizarReunioes(){
        echo "$this->nome está organizando reunioes.";
    }
    //Público.
    public function simularDefinirHorario(){
        $this->definirHorario();
    }
    public function simularorganizarReunioes(){
        $this->organizarReunioes();
    }
}
?>