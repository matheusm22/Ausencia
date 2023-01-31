<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="download.ico" type="image/x-icon">
    <title>Tela de login</title>
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

        #cad{
            color:aliceblue;
            font-size: 20px;
            text-align: right;
            padding-top: 25px;
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
    </style>
</head>
<body>

    <div>
        <h1>Registro Ponto</h1>
        <form action="funclogin.php" method="POST">
            <input type="text" name="agente" placeholder="Agente">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <br><br><br>
            <a id="cad" href="cad.php">Cadastre-se</a>
            
        </form>
    </div>
</body>
</html>
