<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <title>Aula 06 - 4</title>

</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Variaveis variantes<hr></br>
     <?php
     
        $x = "abc";
        $$x = "def"; # A variavel $$x é uma variavel variante, ou seja, a variavel $$x na verdade é $abc
        echo "A variavel X é: $x";
        echo "</br>E a variavel ABC é: $abc";

     ?>

</body>
</html>