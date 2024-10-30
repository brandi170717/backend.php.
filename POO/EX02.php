<?php
//Crie uma classe Livros com os atributos titulo, autor e anoPublicacao.
//Adicione dois métodos exibirDetalhes que 

//Modelo -> Entidade

class Livro{

//Atributos -> Caracteristicas    
public $nome = 'Colleen Hoover';
public $ano= 2018;
public $titulo = 'É Assim que Acaba';

//Métodos -> Ações
    function resumirCadFunc(){
        //'Esse é o resumo do cadastro'
            return "$this->nome foi a criadora do livro $this->titulo que foi puplicado em $this->ano";
    }
    function modificarNumAno($novoAno){
        $this->ano = $novoAno;
    }
    function exibirAno(){
        return "$this->nome foi a criadora do livro $this->titulo que foi puplicado em $this->ano";
    }
 
}

//Objeto -> Identidade

$x = new Livro();
echo $x->resumirCadFunc();//Para acessar atributos ou metodos usando o ->
echo '<hr>';

$x->modificarNumAno(2024);
echo $x->exibirAno();
echo '<hr>';

?>