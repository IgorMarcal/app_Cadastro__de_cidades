<? require_once "validador_acesso.php" ?>  

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Desafio PENTAGRAMA - Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <style>
      .card-home{
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

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-4 d-flex justify-content-center">
                  <a href="salvar_cidade.php">
                    <p>Registrar cidade</p>
                  </a>
                </div>
                <div class="col-4 d-flex justify-content-center">
                  <a href="relacao_cidades.php">
                    <p>Registro de cidades</p>
                  </a>  
                </div>
                <div class="col-4 d-flex justify-content-center">
                <a href="cadastra_usuario.php">
                  <p>Cadastrar usuario</p>
                </a>  
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>