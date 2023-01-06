<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <title>Aula 05</title>

</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Operadores Aritméticos<hr></br>
     <?php
     
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $med = ($n1 + $n2)/2;
        
        echo "Números recebidos $n1 e $n2";
        echo "<hr></br>A soma vale " .($n1 + $n2);
        echo "</br>A subtração vale " .($n1 - $n2);
        echo "</br>A multiplicação vale " .($n1 * $n2);
        echo "</br>A divisão vale " .($n1 / $n2);
        echo "</br>A modulo vale " .($n1 % $n2);
        echo "</br>A media vale $med";
        
     ?>
    </h1>

</body>
</html>