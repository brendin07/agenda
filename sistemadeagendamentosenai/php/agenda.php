<?php


session_start();

if (!(isset($_SESSION['usuario_nome']))) {
  header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciamento Senai</title>
  <link rel="stylesheet" href="../css/estilo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand"><img src="../img/senai-logo.png" width="142" alt="pagina inicial"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="agenda.php">Página inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="suporte.php">Suporte</a>
          </li>
        </ul>
        <span class="navbar-text">
        <a href="../php/index.php"><img src="../img/log-out.png" alt="sair" width="25px"></a>
      </span>
      </div>
    </div>
  </nav><br><br>
  <div class="all">

    <div class="sexo">
      <div class="card" style="width: 18rem;">
        <img src="../img/blocoa.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Salas de aula</h5>
          <p class="card-text">Clique no card para fazer o agendamento da sala de aula</p><br>
          <a href="./sala.php" class="btn btn-primary">Clique aqui</a>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="../img/sala.jfif" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Salas de informática</h5>
                <p class="card-text">Clique no card para fazer o agendamento da sala de informática</p>
                <a href="./informatica.php" class="btn btn-primary">Clique aqui</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="../img/sala.jfif" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Outros</h5>
                <p class="card-text">Clique no card para fazer o agendamento de outros ambientes no senai</p>
                <a href="./outro.php" class="btn btn-primary">Clique aqui</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>