<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 19 - 1</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }
        h3 {
            color: red;
        }

    </style>
    <h1>
    Funções para Vetores<hr></br>
    <pre>
     <?php
     $v = array(3,4,5);
     print  "<h3>PRINT_R<br></h3>";

     print_r($v); # para o desenvolvedor ver como esta o vetor

     print  "<h3><br>VAR_DUMP<br></h3>";

     var_dump($v); # quase a mesma coisa de cima, so que mostra a quantidade de elementos do vetor e o tipo de cada um

     print  "<h3><br>COUNT<br></h3>";

     print "O vetor tem " . count($v) . " elementos"; # O count conta quantos elementos tem no vetor
     ?>
</pre>
</body>
</html>