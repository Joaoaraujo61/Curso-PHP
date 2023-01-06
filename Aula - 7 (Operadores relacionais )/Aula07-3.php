<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8"/>
    <title>Aula 07 - 3</title>

</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Operadores Lógicos<hr></br>
     <?php
     
        $ano = $_GET["an"]; #ano de nascimento passado pela URL
        $idade = 2019 - $ano;
        echo "Quem nasceu em $ano tem $idade anos de idade";
        $tipo = ($idade >=18 && $idade<65)?"VOTO OBRIGATÓRIO":"VOTO NÃO OBRIGATÓRIO";/*outros tipos de operadores logicos
        são: ||(ou) xor(ou modificado)*/
        echo "</br>Tipo de voto: $tipo";

     ?>

</body>
</html>