<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="bootstrap.css">
   <link rel="stylesheet" href="style.css">

   <title>Emanuela</title>
</head>

<body>
   <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
         <img src="harry potter logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
         Entre páginas
      </a>
      <ul class="navbar-nav">
         <li class="nav-item">
            <button onclick="location.href='entrar.php'" class="botao-sair" type="button"> Entrar </button>
         </li>
      </ul>
   </nav>
   
   <header>
      <h1>Seja bem vindo ao nosso site</h1>
      <h3></h3> <br>
   </header>
   <div>

      <center>
         <h2>Fale conosco</h2>
      </center>
      <form action=“Nome”>
         <label for=“Nome”> Nome:</label> <br> <br>
         <input type=“nome” id='nome' placeholder="Digite seu nome" required>
      </form> <br>

      <form action=“email”>
         <label for=“email”>Email:</label> <br> <br>
         <input type=“email” id='Email' placeholder="Digite seu email" required>
      </form> <br>

      <p>Digite uma mensagem para nós:</p>
      <textarea name="mensagem" id="mensagem" placeholder="Deixe uma mensagem" rows="10" cols="30"></textarea>

      <center><button>Enviar</button></center>
   </div>
   <img class="harry" src="harry_potter_capa_widelg.jpg" width="860px">
</body>

</html>