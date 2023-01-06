<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <title>Aula 07 - 2</title>

</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Situação<hr></br>
     <?php
     
        $nota1 = $_GET["a"];
        $nota2 = $_GET["b"];     
        $med = ($nota1 + $nota2)/2;   
        echo "As notas passadas foram $nota1 e $nota2</br>";
        echo "A situação é: " . ($med>=5?"Aprovado":"Reprovado");
        echo " com $med pontos"; 

     ?>

</body>
</html>