<?php

require_once ("login.php");

?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Potterhead</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">

    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="./harry potter logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Potterhead
      </a>
      <ul class="navbar-nav">
          <li class="nav-item">
          <button onclick="location.href='logoff.php'"class="botao-sair" type="button"> Sair </button>
          </li>
        </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Criticas
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                 
                  <form action="registra_chamado.php" method="POST">
                    <div class="form-group">
                      <label>Personagem</label>
                      <input name="Personagem" type="text" class="form-control" placeholder="Personagem">
                    </div>
                   
                    <div class="form-group">
                      <label>Livro_Filme</label>
                      <select name="Livro_Filme" class="form-control">
                        <option>Saga</option>
                        <option>Harry Potter e a pedra filosofal</option>
                        <option>Harry Potter e a camara secreta</option>
                        <option>Harry Potter e o prisioneiro de askaban</option>
                        <option>Harry Potter e o calise de fogo</option>
                        <option>Harry Potter e a ordem da fênix</option>
                        <option>Harry Potter e o principe mestiço</option>
                        <option>Harry Potter e as reliquias da morte</option>
                      </select>
                    </div>
                   
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="Descricao" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="row mt-5">
                      <div class="col-6">
                      <a class="btn btn-lg btn-warning btn-block" href="painel.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block"type="submit">Abrir </button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>