<?php
class Pessoa{
    //Variaveis.
    public $nome;
    public $idade;
    private $endereco;
    protected $CPF;
    //Método.
    public function apresentar(){
        echo "$this->nome está apresentando.";
    }
    public function caminhar(){
        echo "$this->nome está caminhando";
    }
    public function falar(){
        echo "$this->nome está falando.";
    }
    private function comer(){
        echo "$this->nome está comendo.";
    }
    private function dormir(){
        echo "$this->nome esta dormindo.";
    }
    //Público.
    public function simularcomer(){
        $this->comer();
    }
    public function simulardormir(){
        $this->dormir();
    }
}
?>