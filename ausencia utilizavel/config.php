<?php
    $dbHost = 'localhost';
    $dbUsername = 'theus';    
    $dbPassword = 'Jmf@95340';    
    $dbName = 'ponto';
    
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword,$dbName);

    //if($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
   // else  
   // {
     //   echo "Conexão efetuada com sucesso";
   // }
?>