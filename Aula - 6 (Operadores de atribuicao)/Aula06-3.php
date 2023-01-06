<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <title>Aula 06 - 3</title>

</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Variaveis Referenciadas<hr></br>
     <?php

        $a = 3;
        $b = &$a; # O & liga as variaveis por referencia, ou seja, tudo que se fizer em uma variavel se replicara em outra 
        $b += 5;
        echo "A vale $a";
        echo "</br>B vale $b";
     
     ?>

</body>
</html>