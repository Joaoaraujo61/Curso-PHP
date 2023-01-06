<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 12 - 2</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
     Do<hr></br>
     <?php
     
        $num = isset($_GET["value"])?$_GET["value"]:1;
        echo "<h1> Calculando o fatorial de $num";
        $cont = $num;
        $fat = 1;
        do {
            $fat *= $cont;
            $cont --;
        }while ($cont >= 1);
        echo "<br/>O fatorial de $num é $fat";

     ?>

        <a href="Aula12-2.html"><br/>VOLTAR</a>

</body>
</html>