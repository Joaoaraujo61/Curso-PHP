<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <title>Aula 07 - 1</title>

</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Operadores Relacionais<hr></br>
     <?php
     
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2";
        $r = ($tipo == "s")?"A soma entre $n1 e $n2 é " . ($n1 + $n2):"A subtração entre $n1 e $n2 é " . ($n1 - $n2); #Se $tipo for igual a "s" entao some as variaveis $n1 e $n2 senao subtraia elas
        echo "</br>$r";

     ?>

</body>
</html>