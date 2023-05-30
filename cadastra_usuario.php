<?php

   if(isset($_GET['success'])){
      $cadastro = true;
   }
?>

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Desafio PENTAGRAMA - Cadastro de usuario</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-relacoes-cidade {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row ">
      
          <div class="card-relacoes-cidade">
            <div class="card-header">
              Cadastrar usuario
            </div>

            <?php if(isset($cadastro) &&  $cadastro == true){
                ?>
                <div id="modal" class="show.bs.modal " tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title text-success">Sucesso no cadastro</h5>
                        <button type="button" class="close" data-dismiss="show.bs.modal" aria-label="Close">
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Usuario cadastrado com sucesso no sistema</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="show.bs.modal" onClick="parent.location='cadastra_usuario.php'" >Close</button>
                      </div>
                    </div>
                  </div>
                </div>

            <?php }?>

            <div class="card-body">
              <div class="row mt-5">
                <div class="col-12">  
                  <form method="post" action="registra_usuario.php">
                      <div class="form-group">           
                        <input name="email_novo" type="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group">           
                        <input name="senha_novo" type="password" class="form-control" placeholder="Senha">
                      </div>
                      <div class="form-group">           
                        <input name="nome_novo" type="text" class="form-control" placeholder="Nome">
                      </div>
                      <div class="row mt-5">
                        <div class="col-6">
                          <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
                        </div>

                        <div class="col-6">
                          <button class="btn btn-lg btn-info btn-block" type="submit">Salvar</button>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
  </body>
</html>