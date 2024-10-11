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

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta sua casa
            </div>
           
            <div class="card-body">
             
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Grifinoria</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Casa</h6>
                  <p class="card-text">Descrição da casa...</p>

                </div>
              </div>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Lufa-Lufa</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Casa</h6>
                  <p class="card-text">Descrição da casa...</p>

                </div>
              </div>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Corvinal</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Casa</h6>
                  <p class="card-text">Descrição da casa...</p>

                </div>
              </div>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title">Sonserina</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Casa</h6>
                  <p class="card-text">Descrição da casa...</p>

                </div>
              </div>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="painel.php">Voltar</a><br></br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>