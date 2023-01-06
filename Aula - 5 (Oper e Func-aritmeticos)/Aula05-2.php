<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <title>Aula 05 - 2</title>

</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Funções Aritméticas<hr></br>
     <?php
     
        $a = $_GET["a"]; #para pegar valor pela url
        $b = $_GET["b"];
        echo "Valores recebidos $a e $b";
        echo "</br>O valo absoluto de $a é: " . abs($a); #para pegar valor absoluto de uma variavel
        echo "</br>O valor absoluto de $b é: " . abs($b);
        echo "</br>O valor de $a<sup> $b</sup> é: " . pow($a, $b);#para pegar a potencia de variaveis, e o <sup> é para elever um numero a outro
        echo "</br>O valor de $b<sup> $a</sup> é: " . pow($a, $b);
        echo "</br>A raiz de $a é: " . sqrt($a);#Para calcular a raiz quadrada
        echo "</br>A raiz de $b é: " . sqrt($b);
        echo "</br>O valor de $a arredondado é: " . round($a);# para mostrar o valor arredondado de um numero real, para você arredondar so pra cima ceil() e so para baixo floor()
        echo "</br>O valor de $b arredondado é: " . round($b);
        echo "</br>A parte inteira de $a é: " . intval($a); #para pegar parte inteira de um numero
        echo "</br>A parte inteira de $b é: " . intval($b);
        echo "</br>O numero $a em formato de moeda é R$ " . number_format($a, 2, ",", "."); # para mostrar a variavel $a so com duas casas decimais e separado por uma virgula nas casas decimais, e nas casas de milhares separado porum ponto
     ?>

</body>
</html>