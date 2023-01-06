<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 12 - 3</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Tabuada<hr></br>
     <?php
     
        $n = isset($_GET["nn"])?$_GET["nn"]:1;
        $mult = 1;
        $cont = 1;
        do {
            $mult = $n * $cont;
            echo "$cont * $n = $mult<br/>";
            $cont ++;
        }while ($cont <= 10);

     ?>

        <a href="Aula12-3.html"><br/>VOLTAR</a>

</body>
</html>