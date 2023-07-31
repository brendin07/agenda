<?php


include('../system/conexao.php');


if (isset($_GET['metodo']) && $_GET['metodo'] == 'entrar') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
//    echo '<pre>';
//     print_r($_POST);
//     echo '</pre>';
//     exit();

$sql = "SELECT * FROM adm WHERE usuario_login =
'$email' AND usuario_senha = '$senha'";

$resultado = mysqli_query($link, $sql);
$retorno = mysqli_num_rows($resultado);


      if ($retorno<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.php';</script>";
        die();
      }else{
        
        session_start();


        $usuario = mysqli_fetch_assoc($resultado);
       
        $_SESSION['usuario_nome'] = $usuario['usuario_nome'];
        
        $_SESSION['usuario_email'] = $usuario['usuario_email'];
        
        header("location: ../adm/admpage.php");


      }
}