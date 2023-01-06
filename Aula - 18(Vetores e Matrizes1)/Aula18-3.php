<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 18 - 3</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>  
    <h1>
    Chaves Associativas<hr></br>
    <pre> <!-- para melhor vizualização do vetor--> 
    
     <?php
     
        $v = array ("nome"=>"João Pedro", #vetor com indice "nome" recebendo João pedro
                    "idade"=>13,#vetor com indice "idade" recebendo 1
                    "peso"=>60.0#vetor com indice "peso" recebendo 60.0
                );
        foreach($v as $key => $cont_u){
            print "O compo $key possui o valor $cont_u <br>";
        }

     ?>
     
</pre>
</body>
</html>