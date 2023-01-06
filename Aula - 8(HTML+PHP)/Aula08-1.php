<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <title>Aula 08 - 1</title>

</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    HTML + PHP<hr></br>
     <?php
     
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O valor enviado foi $valor";
        echo "</br>Sua Raiz Quadrada é " . number_format($rq, 2, ",", ".");

     ?>

        <a href="Aula08-1.html"></br>Voltar</a>

</body>
</html>