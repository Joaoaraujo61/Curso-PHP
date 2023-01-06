<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 09 - 1</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Estrutura IF<hr></br>
     <?php
     
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Voce nasceu em $a e tem $i anos.";
                                     #//////////////////////////////////////////////////////////
        if($i >= 18){                #/........se a idade for maior ou igual a 18 então,......./
            $v = "Já pode votar";    #/.................você "ja pode votar" e................./
            $d = "Já pode dirigir";  #/..................."já pode dirigir"..................../
        }                            #//////////////////////////////////////////////////////////
        else{                        #/..........................Senão........................./
            $v = "Não pode votar";   #/..................."Não pode votar" e.................../
            $d = "Não pode dirigir"; #/.................."Não pode dirigir"..................../
        }                            #//////////////////////////////////////////////////////////
        echo "<br/>Com essa idade voce $v e tambem $d";

     ?>

        <a href="Aula09-1.html"><br/>Votar</a>

</body>
</html>