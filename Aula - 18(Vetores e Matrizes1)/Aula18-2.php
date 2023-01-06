<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 18 - 2</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>  
    <h1>
    Indices Personalizados<hr></br>
    <pre> <!-- para melhor vizualização do vetor--> 
    
     <?php
     
        $v = array (1 => "A", 
                    3 => "B",
                    4 => "C");# indice 1 recebe A e o 3 recebe B
        $v[] = "D"; # esse vetor vai ficar na posição 5, porque o ultimo vetor foi na posição 4 o "C"
        unset($v[5]); # tirar vetor na posição 5 ou seja o "D" que acabamos de colocar
        print_r($v);

     ?>
     
</pre>
</body>
</html>