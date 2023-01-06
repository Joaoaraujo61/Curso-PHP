<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 19 - 2</title>
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
     $v = array(3,8,4);
     print_r($v);
     $v[] = 6;
     print_r($v);

     print  "<h3><BR>ARRAY_PUSH<br></h3>";

     print "Adiciona um item no final do vetor <br>";
     array_push($v,7);
     print_r($v);

     print  "<h3><BR>ARRAY_POP<br></h3>";

     print "Retira o Ultimo item do vetor<br>";
     array_pop($v);
     print_r($v);

     print  "<h3><BR>ARRAY_UNSHIFT<br></h3>";

     print "Coloca item no inicio do vetor<br>";
     array_unshift($v, 0);
     print_r($v);

     print  "<h3><BR>ARRAY_SHIFT<br></h3>";

     print "Retira primeiro item do vetor<br>";
     array_shift($v);
     print_r($v);

     print  "<h3><BR>SORT<br></h3>";

     print "Para colocar os itens em ordem crescente ou alfabetica";
     sort($v);
     print_r($v);

     print  "<h3><BR>RSORT<br></h3>";

     print "Coloca itens do vetor em ordem decrescente ou não alfabetica";
     rsort($v);
     print_r($v);

     print  "<h3><BR>ASORT<br></h3>";

     print "Coloca os itens na ordem crescente ou alfabetica e o indice muda junto com o item";
     asort($v);
     print_r($v);

     print  "<h3><BR>ARSORT<br></h3>";

     print "Coloca os itens na ordem decrescente ou não alfabeticae o indice muda junto com o item";
     $v = array(3,8,4,6);
     arsort($v);
     print_r($v);

     print  "<h3><BR>KSORT<br></h3>";

     print "Coloca os indices em ordem crescente<br>";
     $n = array(
         3=>"H",
         2=>"B",
         1=>"J",
         0=>"Y"
     );
     print_r($n);
     ksort($n);
     print_r($n);

     print  "<h3><BR>KRSORT<br></h3>";

     print "Coloca os indices em ordem decrescente<br>";
     krsort($n);
     print_r($n);
     ?>
</pre>
</body>
</html>