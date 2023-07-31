<?php

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>administrador</title>
</head>

<body>

    <!-- As a link -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="../img/senai-logo.png" class="img-fluid" width="142"
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
                        <a class="nav-link" href="admpage.php">Página inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Suporte</a>
                    </li>
                </ul>
                <span class="navbar-text">

                </span>
            </div>
        </div>
    </nav>
    
        <form method="POST" action="../adm/validacao.php?metodo=entrar" class="login bg-light">
            <div class="mb-3">
                <span class="t-form">Faça seu login</span><br><br>
                <label for="exampleInputEmail1" class="form-label">Login</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Insira seu email" required>
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Insira a senha">
            </div>
            <div class="link"><a href="cadastro.php">Não possui login?</a></div>
            <button type="submit" name="entrar" class="btn btn-primary" value="">Entrar</button>
        </form>
    </section>
    <!-- Footer -->
    <section class="rodape">
        
        <footer class="text-center text-white" style="background-color: #0a4275;">
          
          <div class="container p-4 pb-0">
            
            <section class="">
              <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">contato:</span>
                <i class="fa-solid fa-phone-flip"></i>  
              </p>
            </section>
            
          </div>
          
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="admpage.php">managementofroom.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </section>
<!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>"></script>
</body>

</html>