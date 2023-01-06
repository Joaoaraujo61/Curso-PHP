<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <title>Aula 06 - 2</title>

</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Operadores de Incremento e decremento<hr></br>
     <?php
     
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano que vem é " . ++$atual; #O ++$atual é para o $atual mais 1(isso se chama pré-incremento)

     ?>

</body>
</html>