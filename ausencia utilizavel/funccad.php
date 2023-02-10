<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['agente']) && !empty($_POST['senha']) && !empty($_POST['setor']))
    {
        
        // Acessa
        include_once('config.php');
        $agente = $_POST['agente'];
        $senha = $_POST['senha'];
        $setor = $_POST['setor'];


        // print_r('agente: ' . $agente);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);
        
        

       //usar isso aqui para CADASTRAR OS AGENTES NÃO ESQUECER!!! 
       $result = mysqli_query($conexao, "INSERT INTO usuarios(agente,senha,setor) VALUES ('$agente','$senha','$setor')");

        
        

         print_r($sql);
         print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['agente']);
            unset($_SESSION['senha']);
            unset($_SESSION['setor']);
            header('Location: enviocad.php');
        }
        else
        {
            $_SESSION['agente'] = $agente;
            $_SESSION['senha'] = $senha;
            $_SESSION['setor'] = $setor;
            //header('Location: login.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: errocad.php');
    }
?>