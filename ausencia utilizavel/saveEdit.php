<?php

    include_once('config.php');

    if (isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $setor = $_POST['setor'];
        $datas = $_POST['datas'];
        $motivo = $_POST['motivo'];
   
        $sqlUpdate = "UPDATE ausencia SET nome='$nome',sobrenome='$sobrenome',setor='$setor',datas='$datas',motivo='$motivo' WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);

     }
     header('Location: registros.php');

?>