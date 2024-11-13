<?php
//Crie uma classe Aluno com atributos nome, idade e curso.
//Adicione o método exibirDadosAluno para mostrar as informações 
//com aluno alterCurso para Mudar o curso

//Modelo -> Entidade

class Aluno{

//Atributos -> Caracteristicas    
public $nome = 'Manu';
public $idade= 16;
public $curso = 'Desenvolvimento de sistemas';

//Métodos -> Ações
    function resumirCadFunc(){
        //'Esse é o resumo do cadastro do funcionario'
            return "$this->nome possui $this->idade anos e faz o curso $this->curso";
    }
    function modificarCurso($novoCurso){
        $this->curso = $novoCurso;
    }
    function exibirCurso(){
        return "$this->nome possui $this->idade anos e faz o curso $this->curso";
    }
 
}

//Objeto -> Identidade

$x = new Aluno();
echo $x->resumirCadFunc();//Para acessar atributos ou metodos usando o ->
echo '<hr>';

$x->modificarCurso('Multimidia');
echo $x->exibirCurso();
echo '<hr>';

// $x = new Aluno();
// $x->modificarCurso('Multimidia');
// echo $x->resumirCadFunc();
// echo '<hr>';
?>

