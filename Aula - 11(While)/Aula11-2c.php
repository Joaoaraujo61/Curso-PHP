<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 11 - 2</title>
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

    $i = 1;
    While ($i <= 5) {
        $v = "num" . $i;
        $url = "v" . $i;
        $$v = isset($_GET["$url"])?$_GET["$url"]:0;
        $i++;
    }

    echo "Valores passados:<br/>";
    echo "$num1, $num2, $num3, $num4, $num5";

?>

    <a href="Aula11-2.php"><br/>VOLTAR</a>

</body>
</html>