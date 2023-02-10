<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="download.ico" type="image/x-icon">

    <title>Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(fundo_econet.png);
            background-repeat:no-repeat;
            background-size:cover;
            background-position:top;
            padding-bottom:50%;
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 100px;
            border-radius: 15px;
            color: #fff;
        }
        h1{
            text-align:center;
            font-size:180%;
        }
        input{
            padding: 12px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
        
        p {
           font-size: 18px; 
        }
    </style>
</head>
<body>

    <div>
        <h1>Cadastrar acesso</h1>
        <form action="funccad.php" method="POST">
            <input type="text" name="agente" placeholder="Agente">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <p>Selecione o seu setor:</p>
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
                <br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>
