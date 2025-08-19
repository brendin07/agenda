<?php
    //Iniciando o arquivo config.php
    require_once('../system/config.php');

    //Abrindo a conexao com o banco de dados
$link = mysqli_connect(HOST, USER,  PASS, BANCO) 
        or  die("Erro na conexao do banco de dados!");

        mysqli_select_db($link, BANCO);
    //selecionando o banco de dados para enviar os scripts
   
?>  