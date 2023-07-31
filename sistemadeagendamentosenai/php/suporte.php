<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/suporte.css">
    <title>Suporte</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="../img/senai-logo.png" width="142"
                    alt="pagina inicial"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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

                </span>
            </div>
        </div>
    </nav><br><br><br><br>
    <div class="cadastro">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
        <div class="container">
            <h3>Suporte</h3>
            <input class="form-control" type="text" placeholder="Nome completo" aria-label="default input example" required><br>
            <span>Funcionário(a) do</span><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                <label class="form-check-label" for="flexCheckDefault">
                  Senai
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Sesi
                </label>
              </div>
              <br>
            <input class="form-control" type="text" placeholder="Email@exemplo..." aria-label="default input example" required>
            <br>
            <textarea class="form-control" placeholder="Digite aqui..."></textarea>
            <button id="botao" type="button" class="btn btn-primary">Enviar</button>
        </div>
    </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>