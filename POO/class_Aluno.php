<?php

class Aluno{

    //Variaveis.

    public $nome;
    public $idade;
    private $matricula;
    protected $turma;

    //Método.

    public function estudar(){
        echo "$this->nome está estudando.";
    }

    public function fazerProva(){
        echo "$this->nome está fazendo prova.";
    }

    public function assistirAula(){
        echo "$this->nome está assistindo a aula do $this->turma.";
    }

    private function entregarTrabalho(){
        echo "$this->nome entregou o trabalho.";
    }

    private function faltarAula(){
        echo "$this->nome faltou a aula.";
    }

    //Público.

    public function simularEntregaDeTrabalho(){
        $this->entregarTrabalho();
    }

    public function simularFaltarAula(){
        $this->faltarAula();
    }


}

?>