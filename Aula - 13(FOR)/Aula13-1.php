<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 13 - 1</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Repetição FOR<hr></br>
     <?php
     
        echo "Contagem progressiva:<br/>";
        for($i = 1; $i <= 10; $i++) {
            echo "$i ";
        }
        echo "<br/>";
        echo "Contagem Regressiva:<br/>";
        for($i = 10; $i >= 1; $i--){
            echo "$i ";
        }
        echo "<br/>";
        echo "Contagem de 2 em 2:<br/>";
        for($i = 0; $i <= 20; $i+= 2){
            echo "$i ";
        }
        echo "<br/>";
        echo "Contagem de 5 em 5:<br/>";
        for($i = 0; $i <= 50; $i+=5){
            echo "$i ";
        }

     ?>

</body>
</html>