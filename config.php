<?php

    $dbHost = 'LocalHost:3307';
    $dbUsername = 'root';
    $dbPassword = 'etecjau';
    $dbName = 'tccweb';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo"erro";
    // }else{
    //     echo "sucesso";
    // }
?>