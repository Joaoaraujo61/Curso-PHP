<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 13 - 2</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Tabuada FOR<hr></br>
     <?php
     
        $nn = isset($_GET["num"])?$_GET["num"]:1;
        for($cont = 1; $cont <= 10; $cont++){
            $op = $nn * $cont;
            echo "$nn * $cont = $op</br>";
        }
     ?>

        <a href="Aula13-2.php"></br>VOLTAR</a>

</body>
</html>