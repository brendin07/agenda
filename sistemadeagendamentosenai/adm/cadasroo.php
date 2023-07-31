<?php
require_once('../system/conexao.php');

if (isset($_POST['acao']) && $_POST['acao'] == 'cadastro') {
    // echo "Estou pronto para cadastrar no banco galera M32";
    // exit();

    //Passo 1: Resgatar os dados preenchidos no formulario
    $codigo = $_POST['codigo'];
    $observacao = $_POST['observacao'];

  

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // exit();

    //Verificar no banco de dados se ja existe um usuário_login com 
    // com este nome, se ja existe informar o usuário, caso contrário,
    // continuar com o cadastro

    //SQL com a pesquisa com base no login do usuário
    $pesquisa = "SELECT * FROM sala  WHERE codigo ='$codigo'";
    //Executa o SQL no banco de dados e guardar o retorno em $resultado
    $resultado = mysqli_query($link, $pesquisa);
    //buscar a qtde de linhas resultantes da consulta 
    $retorno = mysqli_num_rows($resultado);

    if ($retorno > 0) {
        echo "sala já cadastrado no sistema, escolha outro nome para login!";
    } else {



        //Passo 2: Criar o script SQL para anular ao banco de dados
        $insert = "INSERT INTO sala (codigo, observacao) VALUES
        ('$codigo', '$observacao')";

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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Administrador</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-primary">
            <!-- Navbar Brand-->
            <img src="img/senai-logo.png" alt="Pagina inicial" width="142px">
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end bg-light" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">configuracao</a></li>
                        <li><a class="dropdown-item" href="../adm/index.php">sair</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <br><br><br><br><br><br><br>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">navegação</div>
                            <a class="nav-link" href="../adm/admpage.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home-alt"></i></div>
                                Página inicial
                            </a>
                          
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tabelas
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        Gerenciamento Senai
                    </div>
                </nav>
                </div>
              </div>
            <div id="layoutSidenav_content"> 
                <div class="container-fluid px-4">
                     <form action="../adm/cadasroo.php" method="POST">
               
                        <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    
                      <h3>Cadastramento de Sala</h3><br>
                      <span>Qual o código da sala</span>
                      <input class="form-control" type="text" placeholder="Código da sala" name="codigo" aria-label="default input example"
                          required><br>
                    
                      <span>Alguma observação a ser considerada?</span>
                      <textarea class="form-control" placeholder="Alguma observação..." name="observacao"></textarea><br>
                      <input type="hidden" name="acao" value="cadastro"><br>   
           <button class="btn btn-primary" type="submit" value="Cadastrar">Cadastrar</button>
                  </div>
                </form>
                </div>
                </div>
                
                
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>




