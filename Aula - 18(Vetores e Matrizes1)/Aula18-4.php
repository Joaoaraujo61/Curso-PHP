<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 18 - 4</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Matrizes (Vetores de vetores)<hr></br>
    <pre>
     <?php
        $m = array(  array(3,4),
                     array(5,6),
                     array(7,8)
                );
        $m [0] [1] = $m [2] [1]; #a linha 0 coluna 1 de M sera substituida pela linha 2 coluna 1
        print_r($m);
            
     ?>
</pre>
</body>
</html>