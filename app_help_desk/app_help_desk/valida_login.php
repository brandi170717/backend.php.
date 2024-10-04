<?php

//  echo "<pre>";
//  print_r($_POST);
//  echo "</pre>";
//  echo "<hr>";

//  echo "E-mail: ";
//  echo $_POST['email'];
//  echo '<br>';
// echo $_POST['senha'];

// session_star();

$usuario_autenticado = false;

$usuario_cadastrado = [
    ['email' => 'admin@senai.br',
    'senha' => '12345' 
    ] ,
    ['email' => 'supot@senai.br',
    'senha' => '54321' 
    ] ,
    ['email' => 'aluno@senai.br',
    'senha' => '67890' 
    ] , 
];

foreach ($usuario_cadastrado as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado){
    $_SESSION['autenticado'] ='SIM';    
    echo "Usuário autenticado com sucesso";
}else{
    $_SESSION['autenticado'] ='NÃO';   
    // echo"Usuário ou senha incorreto";
    header ('Location: index.php?login=erro');
}
?>
