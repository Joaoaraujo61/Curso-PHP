<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 11 - 3</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Repetição While<hr></br>
     <?php
     
        $IN_1 = isset($_GET["num_1"])?$_GET["num_1"]:1;
        $FIN_2 = isset($_GET["num_2"])?$_GET["num_2"]:5;
        $INC_3 = isset($_GET["inc"])?$_GET["inc"]:1;
        While ($IN_1 <= $FIN_2) {
            echo $IN_1 . "</br>";
            $IN_1 += $INC_3;
        }

     ?>

        <a href="Aula11-3.html"><br/>VOLTAR</a>

</body>
</html>