<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <title>Aula 06 - 1</title>

</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Operadores de Atribuição<hr></br>
     <?php
     
        $preco = $_GET["a"];
        echo "O preço do produto é R$ " . number_format($preco, 2, ",", ".");
        $preco1 = $preco - ($preco*10/100); 
        echo "</br>O produto com 10% de desconto fica R$ " . number_format($preco1, 2, ",", ".");
        $preco += ($preco*10/100); # O "$preco +=" significa que é a variavel $preco menos ela mesma "$preco = $preco +", o mesmo poderia acontecer com "- * / % .   etc..."
        echo "</br>O produto com 10% de aumento fica R$ " . number_format($preco, 2, ",", ".");

     ?>

</body>
</html>