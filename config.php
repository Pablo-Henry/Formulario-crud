<?php 
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '*********'; //simulação da minha senha do mysql
    $dbName = 'from-teste';

    $mysql = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
    //$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

    //if($mysql -> connect_errno)
    //{
        //echo "erro";
    //}
    //else
    //{
        //echo "Conexão efetuada com sucesso";
    //}
?>