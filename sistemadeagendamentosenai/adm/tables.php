<?php
require_once('../system/conexao.php');
if(isset($_GET['excluir'])&& $_GET['excluir'] =='sim'){
    $codigo_turma = $_GET['prod_id'];
    $sql = "DELETE FROM agenda WHERE codigo_turma='$codigo_turma'";
    $query = mysqli_query($link,$sql);
    if ($query == true) {
        ?>
        <script>
            alert('registro deletedo com sucesso');
            location.href('tables.php');
            </script>
            <?php
    
    }else{
        ?>
        <script>
            alert('erro ao deletar registro ');
            location.href = 'tables.php';
            </script>
            <?php
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Tabela de cadastros </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet" />
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-primary">
        <!-- Navbar Brand-->
        <img src="img/senai-logo.png" alt="Pagina inicial" width="142px">
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">configuracao</a></li>
                    <li><a class="dropdown-item" href="../adm/index.php">Sair</a></li>
                </ul>
            </li>
        </ul>
    </nav>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Navegação</div>
                            <a class="nav-link" href="../adm/admpage.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home-alt"></i></div>
                                Inicio
                            </a>
                            <a class="nav-link" href="tables.php    ">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tabela          
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                    Gerenciamento Senai
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tabela de cadastrados</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Página inicial </a></li>
                            <li class="breadcrumb-item active">Tabela</li>
                        </ol>
                        <div class="card mb-4">
                        
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Cadastrados
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Código turma</th>
                                            <th>Periodo</th>
                                            <th>Data inicio</th>
                                            <th>Data final</th>
                                            <th>email</th>
                                            <th>Observacao</th>
                                            
                                            
                                        </tr>
                                        <?php
                $sql = "SELECT * FROM agenda ORDER BY codigo_turma DESC";
                $query = mysqli_query($link, $sql);
                $registro = mysqli_num_rows($query);
                if ($registro === 0) {
                ?>
                 
                                    </thead>
                                    
                                    <tbody>
            
                                       <?php
                            for ($index=1; $index <=8;$index++) {
                                echo '<td>Nenhum registro</td>';
                            }
                        ?>
                                   <?php
                } else {
                    while ($mostrar = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $mostrar['codigo_turma'];?></td>
                            <td><?php echo $mostrar['periodo'];?></td>
                            <td><?php echo $mostrar['data_comeco'];?></td>
                            <td><?php echo $mostrar['data_final'];?></td>
                            <td><?php echo $mostrar['email'];?></td>
                            <td><?php echo $mostrar['observacao'];?></td>
                            <td><button id="botao" class="btn btn-success "><a href="<?php echo PATH;?>editar.php?id=<?= $mostrar['id_agd'];?>">Editar</a></button></td>
                            <td><button id="botao" class="btn btn-danger"><a href="#" onclick="javascript: if (confirm('deseja excluir esse registro?'))location.href='?excluir=sim&prod_id=<?php echo $mostrar['codigo_turma']?>'">Excluir</button></td>
                        </tr>
                    <?php
                    }
                }
            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
