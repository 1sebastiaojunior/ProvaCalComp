<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <title>DQC84</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cadastro DQC84</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page-dqc84=novo-dqc84">Novo DQC84</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="?page-dqc84=listar-dqc84">Listar DQC84</a>
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
                switch (@$_REQUEST["page-dqc84"]) {
                    case "novo-dqc84":
                        include("novo-dqc84.php");
                        break; 
                    case "listar-dqc84":
                        include("listar-dqc84.php");
                        break;
                    case "salvar-dqc84":
                        include("salvar-dqc84.php");
                        break;
                    case "editar-dqc84":
                        include("editar-dqc84.php");
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
