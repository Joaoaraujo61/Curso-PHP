<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 15 - 1</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Function com Referência<hr></br>
     <?php
     
        function teste(&$x){ /* O & serve para ligar por referencia o argumento $x com o argumento que será passado 
            na função, ou seja, todo valor contido em X estrará no argumento passado depois ma função, nesse caso o
            argumento é a variável A*/
            $x += 2;
            print "O valor da variavel X é $x <br>";
        }
        $a = 3;
        teste($a);   # Este é o argumento citado acima, se não fosse ligado por referencia A seria igual a 3, não a cinco
        print "O valor da variavel A é $a";

     ?>

</body>
</html>