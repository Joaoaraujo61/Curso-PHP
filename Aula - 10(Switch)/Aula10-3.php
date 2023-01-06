<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 10  - 3</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Condicional Switch<hr></br>
     <?php
     
        $estado = isset($_GET["est"])?$_GET["est"]:"INFORME O ESTADO";
        switch($estado){
            case 1:
                echo "Você mora na Região Norte";
            break;
            case 2:
                echo "Você mora na Região Nordeste";
            break;
            case 4:
                echo "Voê mora na Região Centro-Oeste";
            break;
            case 5: 
                echo "Você mmora na Região Sul";
        }

     ?>

        <a href="Aula10-3.html"><br/>VOLTAR</a>

</body>
</html>