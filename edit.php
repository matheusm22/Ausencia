<?php

if(!empty($_GET['id']))
{
include_once('config.php');


$id = $_GET['id'];

$sqlSelect = "SELECT * FROM ausencia WHERE id=$id";

$result = $conexao->query($sqlSelect);

if($result->num_rows > 0)
{
    while($user_data =mysqli_fetch_assoc($result))
    {
    $nome = $user_data['nome'];
    $sobrenome = $user_data['sobrenome'];
    $setor = $user_data['setor'];
    $datas = $user_data['datas'];
    $motivo = $user_data['motivo'];
  }
 
}
else{
    header('Location:registros.php');
 }
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
    <style>
        #volta {
            color:white;
            font-size: 20px;
        }

        #update{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #update:hover{
            background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
    <title>Econet - Ausência</title>
</head>
<body>
 <a id="volta" href="registros.php">Voltar</a>
     <div class="box">
        <form action="saveEdit.php" method="post">
            <fieldset>
                <legend><b>Editar Ausência!</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="sobrenome" id="sobrenome" class="inputUser" value="<?php echo $sobrenome?>" required>
                    <label for="text" class="labelInput">Sobrenome</label>
                </div>
                <p>Setor:</p>
                <input type="radio" id="Adm" name="setor" value="Adm" <?php echo ($setor == 'Adm')? 'checked': ''?>  
                <label for="Adm">Adm</label>
                <br>
                <input type="radio" id="Comercial" name="setor" value="Comercial" <?php echo ($setor == 'Comercial')? 'checked': ''?>  
                <label for="Comercial">Comercial</label>
                <br>
                <input type="radio" id="T.I" name="setor" value="T.I" <?php  echo ($setor == 'T.I')? 'checked': ''?> 
                <label for="T.I">T.I</label>
                <br>
                <input type="radio" id="Federal" name="setor" value="Federal" <?php echo ($setor == 'Federal')? 'checked':''?>  
                <label for="Federal">Federal</label>
                <br>
                <input type="radio" id="Fiscal" name="setor" value="Fiscal" <?php echo ($setor == 'Fiscal')? 'checked': ''?>  
                <label for="Fiscal">Fiscal</label>
                <br>
                <input type="radio" id="Trabalhista" name="setor" value="Trabalhista" <?php  echo ($setor == 'Trabalhista')? 'checked': ''?>
                <label for="Trabalhista">Trabalhista</label>
                <br>
                <input type="radio" id="Atendimento" name="setor" value="Atendimento" <?php echo ($setor == 'Atendimento')? 'checked': ''?>
                <label for="Atendimento">Atendimento</label>
                <br>
                <input type="radio" id="Copa" name="setor" value="Copa" <?php echo ($setor == 'Copa')? 'checked': ''?>
                <label for="Copa">Copa</label>
                <br>
                <br>
                <label for="data"><b>Data:</b></label>
                <input type="date" name="datas" id="data" value="<?php echo $datas?>"  required>
                <br><br><br>
                <div class="inputBox">
                <input type="text" name="motivo" id="motivo" class="inputUser" value="<?php echo $motivo?>" required>
                <label for="motivo" class="labelInput">Motivo</label>
                </div>
                <br><br>
                <input type="hidden" name="id"  value="<?php echo $id ?>"> 
                <input type="submit" name="update" id="update" onclick="clicar()">

<?php
                echo(" <script>
 function  clicar () {
    alert('Ausência enviada com sucesso')
   }
 </script>
 ");
?>
            </fieldset>
        </form>
    </div>
</body>
</html>