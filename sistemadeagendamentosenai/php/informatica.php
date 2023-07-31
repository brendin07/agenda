<?php
require_once('../system/conexao.php');

if (isset($_POST['acao']) && $_POST['acao'] == 'cadastro') {
    // echo "Estou pronto para cadastrar no banco galera M32";
    // exit();

    //Passo 1: Resgatar os dados preenchidos no formulario
    $codigo_turma = $_POST['codigo_turma'];
    $periodo = $_POST['periodo'];
    $data_comeco = $_POST['data_comeco'];
    $data_final = $_POST['data_final'];
    $email = $_POST['email'];
    $observacao = $_POST['observacao'];
  

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // exit();

    //Verificar no banco de dados se ja existe um usuário_login com 
    // com este nome, se ja existe informar o usuário, caso contrário,
    // continuar com o cadastro

    //SQL com a pesquisa com base no login do usuário
    $pesquisa = "SELECT * FROM agenda  WHERE email ='$email'";
    //Executa o SQL no banco de dados e guardar o retorno em $resultado
    $resultado = mysqli_query($link, $pesquisa);
    //buscar a qtde de linhas resultantes da consulta 
    $retorno = mysqli_num_rows($resultado);

    if ($retorno > 0) {
        echo "Login de usuário já cadastrado no sistema, escolha outro nome para login!";
    } else {



        //Passo 2: Criar o script SQL para anular ao banco de dados
        $insert = "INSERT INTO agenda (codigo_turma, periodo, data_comeco, data_final,email,observacao) VALUES
        ('$codigo_turma', '$periodo','$data_comeco','$data_final','$email','observacao')";

        //Passo 3: Executar o script SQL no banco de dados
        $query = mysqli_query($link, $insert);

        if ($query == true) {
?>
            <script>
                alert("Cadastro realizado com sucesso")
            </script>
<?php
        } else {
            echo "Erro ao cadastrar no banco de dados";
        }
    }
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sala.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Agendamento</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
        <a class="navbar-brand" href="../php/agenda.php"><img src="../img/senai-logo.png" width="142" alt="pagina inicial"></a>
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
                <a class="nav-link" href="../php/agenda.php">Página inicial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../php/suporte.php">Suporte</a>
              </li>
            </ul>
            <span class="navbar-text">
    
            </span>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
        <h1>Salas de aula</h1>
        <span>Pré requisitos para agendar</span><br><br><br>
        <!-- <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Salas
            </button>
            <ul class="dropdown-menu">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">
                      A15
                    </label> 
                </ul>
                  </div> -->
                  <form action="informatica.php" method="POST">
                  <span>Qual o código da turma</span>
                  <input class="form-control" type="text" placeholder="Código da turma" name="codigo_turma" aria-label="default input example" required><br><br>
                  <span>Qual período deseja agendar</span>
                  <br><br>
                  <input type="radio" id="html" name="periodo" value="Matutino">
                   <span> Matutino</span>
                  <input type="radio" id="html" name="periodo" value="Vespertino">
                   <span> Vespertino</span>
                  <input type="radio" id="html" name="periodo" value="Noturno">
                   <span> Noturno</span>
                    <br><br>
                    <span>Qual a data do agendamento</span>
                  <input class="form-control" type="date" placeholder="Email@exemplo" name="data_comeco" aria-label="default input example" required><br><br>
                  <span>Qual a data final do agendamento</span>
                  <input class="form-control" type="date" placeholder="Email@exemplo" name="data_final" aria-label="default input example" required><br><br>
                  <span>Alguma observação a ser considerada?</span>
                  <input class="form-control" type="text" placeholder="Observação" name="observacao" aria-label="default input example" required><br><br>
                  <span>Email para retorno</span>
                  <input class="form-control" type="text" placeholder="Email@exemplo" name="email" aria-label="default input example" required><br><br>
                  <div id="liveAlertPlaceholder"></div>
                  <input type="hidden" name="acao" value="cadastro"><br>   
           <button class="btn btn-primary" type="submit" value="Cadastrar">Agendar</button>
        </div>
     
    </div>
    </div>
   </form>
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
        <a class="text-white" href="index.html">managementofroom.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="./index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>
</html>