<?php 

  require_once "validador_acesso.php";

?>  

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Registro de cidades - Cadastrar nova</title>

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
      <div class="row">

        <div class="card-relacoes-cidade">
          <div class="card">
            <div class="card-header">
              Registrar cidade
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">  
                  <form method="post" action="registra_cidade.php?acao=inserir">
                      <div class="form-group">           
                        <input name="cidade" type="text" class="form-control" placeholder="Cidade">
                      </div>

                      <div class="form-group">           
                        <input name="bairro" type="text" class="form-control" placeholder="Bairro">
                      </div>

                      <div class="form-group">
                        <select name="estado" class="form-control">
                          <option>Estado</option>
                          <option>AC</option>
                          <option>AL</option>
                          <option>AP</option>
                          <option>AM</option>
                          <option>BA</option>
                          <option>CE</option>
                          <option>DF</option>
                          <option>ES</option>
                          <option>GO</option>
                          <option>MA</option>
                          <option>MT</option>
                          <option>MS</option>
                          <option>MG</option>
                          <option>PA</option>
                          <option>PB</option>
                          <option>PB</option>
                          <option>PR</option>
                          <option>PE</option>
                          <option>PI</option>
                          <option>RJ</option>
                          <option>RN</option>
                          <option>RS</option>
                          <option>RO</option>
                          <option>RR</option>
                          <option>SC</option>
                          <option>SP</option>
                          <option>SE</option>
                          <option>TO</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <h6>Fundação da cidade:</h6>           
                        <input name="fundacao" value="0000-00-00" type="date" class="form-control" placeholder="Fundação">
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
    </div>
  </body>
</html>