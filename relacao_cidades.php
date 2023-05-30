<?php 
  
  $acao = 'recuperar';
  //require_once "validador_acesso.php";
  require "registra_cidade.php";

?>  

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Registro de cidades - Cidades Cadastradas</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-relacoes-cidade {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>

    <script >
      function remove(id){
        //na ação onclick passam o parametro de remover e o ID selecionado
        location.href = 'relacao_cidades.php?acao=remover&id=' + id;

      }

    </script>
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
      <div class="row">

        <div class="card-relacoes-cidade">
          <div class="card">
            <div class="card-header">
              Relação de cidades
            </div>
          
            <div class="card-body">
              <div class="row mt-5">
                <div class="col-12">
                  <div class="card mb-3 bg-light">

                  <?php //realiza consulta no BD para listar as cidades
                  while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                    ?>
                  
                    <div class="card-body">
                      <h5 class="card-title">Bairro: <?= $linha['bairro'] ?></h5>
                      <h6 class="card-subtitle mb-2 text-muted">Cidade: <?= $linha['cidade'] ?></h6>
                      <h6 class="card-text mb-2 text-muted">Estado: <?= $linha['estado'] ?></h6>
                      <p class="card-text">Fundação: <?= $linha['data_fundacao'] ?></p>
                      <button type="button" class="btn btn-danger" onclick="remove(<?= $linha['id'] ?>)">Remover registro</button>
                    </div>         
                  <?php } ?> 
                </div>
              </div>
              <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>