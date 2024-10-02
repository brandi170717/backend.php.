<?php

//  echo "<pre>";
//  print_r($_POST);
//  echo "</pre>";
//  echo "<hr>";

//  echo "E-mail: ";
//  echo $_POST['email'];
//  echo '<br>';
// echo $_POST['senha'];

$usuario_autenticado = false;

$usuario_cadestrado =[
    ['email' => 'admi@senai.br',
    'senha' => '12345' 
    ]
];

foreach ($usuario_cadestrado as $user){
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado == true){
    echo "Usuário autenticado com sucesso";
}else{
    // echo"Usuário ou senha incorreto";
    header ('Location: index.php?login=erro');
}
?>
