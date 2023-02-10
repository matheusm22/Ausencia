<?php
    session_start();
     //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['agente']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $agente = $_POST['agente'];
        $senha = $_POST['senha'];
        $setor = $_POST['setor'];

         print_r('agente: ' . $agente);
         print_r('<br>');
         print_r('senha: ' . $senha);
         print_r('<br>');
         print_r('setor: ' . $setor);
         print_r('<br>');


        
         $sql = " SELECT * FROM usuarios WHERE agente = '$agente' and senha = '$senha' limit 1";
        $result = $conexao->query($sql);

       //usar isso aqui para CADASTRAR OS AGENTES NÃO ESQUECER!!! 
      // $result = mysqli_query($conexao, "INSERT INTO usuarios(agente,senha) VALUES ('$agente','$senha')");

        
        

         print_r($sql);
         print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['agente']);
            unset($_SESSION['senha']);
            unset($_SESSION['setor']);
            header('Location: login.php');
        }
        else
        {
            $dadosUsuario = mysqli_fetch_assoc($result);
        
            $_SESSION['agente'] = $dadosUsuario['agente'];
            $_SESSION['senha'] = $dadosUsuario['senha'];
            $_SESSION['setor']= $dadosUsuario['setor'];
            header('Location: registros.php');

            // caso o de cima não funcione
            // while ($dados = mysqli_fetch_assoc($result)) {
            //     $_SESSION['agente'] = $dados['agente'];
            //     $_SESSION['senha'] = $dados['senha'];
            //     $_SESSION['setor']= $dados['setor'];
            // }
            
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>