<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 18 - 1</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>  
    <h1>
    Array, Range e Foreach<hr></br>
    <pre> <!-- para melhor vizualização do vetor--> 
    <table border = "1"><tr>
     <?php
     
        $n = array(3,5,8,2);
        $n[] = 7; #para criar nova posição no vetor com o valor 7
        print_r($n);# função para escrever array
        #||||||||||||||||||||||||||||||||||||||||||||| OU ||||||||||||||||||||||||||||||||||||
        $c = range(5 /*esse 5 fica na 1° posição do vetor*/,20 /*esse 20 fica na ultima posição*/,5/*e esse 5 é a quantidade de numeros que vai pular entre o 5 da 1° posição e o 20 da ultima ou seja vão ser colocado os seguintes numeros no vetor 5[1], 10[2], 15[3], 20[4] */);
        print_r($c);
         #||||||||||||||||||||||||||||||||||||||||||||| OU ||||||||||||||||||||||||||||||||||||
        foreach($c as $valor){
            echo "<td>$valor ";
        }

     ?>
     </table>
</pre>
</body>
</html>