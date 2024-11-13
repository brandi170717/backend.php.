<?php
class Professor{
    //Variaveis.
    public $nome;
    public $diciplina;
    private $salario;
    protected $CPF;
    //Método.
    public function ensinar(){
        echo "$this->nome está ensinando.";
    }
    public function corrigirProva(){
        echo "$this->nome está corrigindo prova.";
    }
    public function prepararAula(){
        echo "$this->nome está preparando aula.";
    }
    private function fazerChamada(){
        echo "$this->nome está fazendo chamada.";
    }
    private function corrigirTarefa(){
        echo "$this->nome esta corrigindo tarefas.";
    }
    //Público.
    public function simularFazerChamada(){
        $this->fazerChamada();
    }
    public function simularCorrigirTarefa(){
        $this->corrigirTarefa();
    }
}
?>