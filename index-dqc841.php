<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <title>DQC841</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastro DQC841</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page-dqc841=novo-dqc841">Novo DQC841</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page-dqc841=listar-dqc841">Listar DQC841</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php
                include("config.php");
                switch (@$_REQUEST["page-dqc841"]) {
                    case "novo-dqc841":
                        include("novo-dqc841.php");
                        break; 
                    case "listar-dqc841":
                        include("listar-dqc841.php");
                        break;
                    case "salvar-dqc841":
                        include("salvar-dqc841.php");
                        break;
                    case "editar-dqc841":
                        include("editar-dqc841.php");
                        break;
                    default:
                    print "<h1>Bem vindos!</h1>";
                }
    ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>
