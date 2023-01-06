<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 14 - 2</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
Funções com retorno<hr></br>
     <?php
     
        function soma($a,$b){
            return $a + $b;
        }

        $x = 6;
        $y = 4;
        $r  = soma($x,$y);
        echo "A soma entre $x e $y é $r";

        ?>

</body>
</html>