<?php

$dbHost = 'LocalHost:3307';
$username = 'root';
$password = 'etecjau';
$dbname = 'tccweb';

$conexao = new mysqli($dbHost, $username, $password, $dbname);


    // if($conexao->connect_errno)
    // {
    //     echo"erro";
    // }else{
    //     echo "sucesso";
    // }
?>