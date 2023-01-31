<?php

if(isset($_POST['submit']))
{
include_once('config.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$setor = $_POST['setor'];
$datas = $_POST['datas'];
$motivo = $_POST['motivo'];
header('Location: envio.php');

$result = mysqli_query($conexao, "INSERT INTO ausencia(nome,sobrenome,setor,datas,motivo)
 VALUES ('$nome','$sobrenome','$setor','$datas','$motivo')");
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="download.ico" type="image/x-icon">
    <title>Econet - Ausência</title>
</head>
<body>
    <div class="box">
        <form action="index.php" method="post">
            <fieldset>
                <legend><b>Justificar Ausência!</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="sobrenome" id="sobrenome" class="inputUser" required>
                    <label for="text" class="labelInput">Sobrenome</label>
                </div>
                <p>Setor:</p>
                <input type="radio" id="Adm" name="setor" value="Adm" >
                <label for="Adm">Adm</label>
                <br>
                <input type="radio" id="Comercial" name="setor" value="Comercial" >
                <label for="Comercial">Comercial</label>
                <br>
                <input type="radio" id="T.I" name="setor" value="T.I" >
                <label for="T.I">T.I</label>
                <br>
                <input type="radio" id="Federal" name="setor" value="Federal">
                <label for="Federal">Federal</label>
                <br>
                <input type="radio" id="Fiscal" name="setor" value="Fiscal" >
                <label for="Fiscal">Fiscal</label>
                <br>
                <input type="radio" id="Trabalhista" name="setor" value="Trabalhista" >
                <label for="Trabalhista">Trabalhista</label>
                <br>
                <input type="radio" id="Atendimento" name="setor" value="Atendimento" >
                <label for="Atendimento">Atendimento</label>
                <br>
                <input type="radio" id="Copa" name="setor" value="Copa" >
                <label for="Copa">Copa</label>
                <br>
                <br>
                <label for="data"><b>Data:</b></label>
                <input type="date" name="datas" id="data" required>
                <br><br><br>
                <div class="inputBox">
                <input type="text" name="motivo" id="motivo" class="inputUser" required>
                <label for="motivo" class="labelInput">Motivo</label>
                </div>
                <br>
                <br>
                <input type="submit" name="submit" id="submit" onclick="clicar()">
            </fieldset>
        </form>
    </div>
</body>
</html>