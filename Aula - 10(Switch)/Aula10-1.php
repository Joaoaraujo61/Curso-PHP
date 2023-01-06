<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 10  - 1</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Condicional Switch<hr></br>
     <?php
     
         $num = $_GET["num"]?$_GET["num"]:0;
         $oper = $_GET["oper"]?$_GET["oper"]:1;
         switch($oper) {
             case 1:
                $r = $num * 2;
                break;
             case 2:
                $r = pow($num, 3);# para potencia, pow(numero base, numero expoente);
                break;
             case 3:
                $r = sqrt($num);
         }
         echo "O resultado da operação solicitada é $r";

     ?>

        <a href="Aula10-1.html"><br/>VOLTAR</a>

</body>
</html>