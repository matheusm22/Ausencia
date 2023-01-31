<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['agente']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $agente = $_POST['agente'];
        $senha = $_POST['senha'];

        // print_r('agente: ' . $agente);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);
        
         $sql = " SELECT * FROM usuarios WHERE agente = '$agente' and senha = '$senha'";
        $result = $conexao->query($sql);

       //usar isso aqui para CADASTRAR OS AGENTES NÃO ESQUECER!!! 
      // $result = mysqli_query($conexao, "INSERT INTO usuarios(agente,senha) VALUES ('$agente','$senha')");

        
        

         print_r($sql);
         print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['agente']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['agente'] = $agente;
            $_SESSION['senha'] = $senha;
            header('Location: registros.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>