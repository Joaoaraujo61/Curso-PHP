<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 14 - 3</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    MAis Funções<hr></br>
     <?php
     
        function soma(){
            $p = func_get_args(); /*numera de ordem crescente a partir de 0 os argumentos passados na função,
            exemplo " valor passado: 3,4,5,6. Vai ser enumerado como: 0,1,2,3. E usando ele seria "$p[0] para 3 $p[1]
            para 4 e etc..." */
            $tot = func_num_args();# quantidade de argumentos colocados exemplo: 3,4,5,6 = 4 argumentos
            $s = 0;
            for($i=0;$i<$tot;$i++){
                $s = $s + $p[$i]; # $p[$1] explicado no comentário anterior
            }
            return $s;
        }
         
        $r = soma(3,2,5);
        print "A soma é igual a $r";

        ?>

</body>
</html>