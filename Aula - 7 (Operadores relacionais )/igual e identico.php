<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <title>Identico e Igual</title>

</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Identico e Igual<hr></br>
     <?php
     
        $a = 3;
        $b = "3";
        $r = $a == $b?"Igual":"Não Igual"; # == considera valor
        echo "$r";
        $s = $a === $b?"Igual":"Não Igual"; # === considera valor e tipo
        echo "</br>$s";

     ?>

</body>
</html>