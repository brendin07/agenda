<?php
require_once('../system/conexao.php');

if (isset($_POST['acao']) && $_POST['acao'] == 'cadastro') {
    // echo "Estou pronto para cadastrar no banco galera M32";
    // exit();

    //Passo 1: Resgatar os dados preenchidos no formulario
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $departamento = $_POST['departamento'];

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // exit();

    //Verificar no banco de dados se ja existe um usuário_login com 
    // com este nome, se ja existe informar o usuário, caso contrário,
    // continuar com o cadastro

    //SQL com a pesquisa com base no login do usuário
    $pesquisa = "SELECT * FROM usuarios WHERE usuario_login ='$email'";
    //Executa o SQL no banco de dados e guardar o retorno em $resultado
    $resultado = mysqli_query($link, $pesquisa);
    //buscar a qtde de linhas resultantes da consulta 
    $retorno = mysqli_num_rows($resultado);

    if ($retorno > 0) {
        echo "Login de usuário já cadastrado no sistema, escolha outro nome para login!";
    } else {



        //Passo 2: Criar o script SQL para anular ao banco de dados
        $insert = "INSERT INTO usuarios(usuario_nome, usuario_login, usuario_senha, usuario_departamento) VALUES
        ('$nome', '$email','$senha','$departamento')";

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="./img/senai-logo.png" width="142"
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
                        <a class="nav-link" href="#">Página inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Suporte</a>
                    </li>
                </ul>
                <span class="navbar-text">

                </span>
            </div>
        </div>
    </nav><br><br><br><br>
    <form action="cadastro.php" method="POST">
    <div class="cadastro">
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
        <div class="container">
            <h3>Cadastro</h3>
            <input class="form-control" type="text" placeholder="Nome completo" name="nome" aria-label="default input example" ><br>
            <span>Funcionário(a) do</span><br>
            <div class="form-check">
                <input class="form-check-input" name="departamento" type="checkbox" value="Senai" id="flexCheckDefault" x>
                <label class="form-check-label" for="flexCheckDefault">
                  Senai
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" name="departamento"  type="checkbox" value="Sesi" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                  Sesi
                </label>
              </div>
              <br>
            <input class="form-control" type="text" placeholder="Email@exemplo" name="email" aria-label="default input example" required>
            <br>
            <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Insira a senha" required>
            <input type="hidden" name="acao" value="cadastro"><br>   
           <a href=""><input type="submit" value="Cadastrar"></a>
        </div>
    </div>
    </div>
</form>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>