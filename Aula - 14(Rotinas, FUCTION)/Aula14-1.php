<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 14 - 1</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Funções<hr></br>
     <?php
     
        function soma($a,$b){
            $soma = $a + $b;
            echo "<p>A soma entre $a e $b é $soma</p\>" ;
        }

        soma(3,4);
        soma(2,2);
        soma(4,7);
        
        $x = 6;
        $y = 4;
        soma($x,$y);

        ?>

</body>
</html>