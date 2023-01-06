 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Operadores Aritméticos<hr></br>
    <?php

                                //Aqui declaro variáveis e pego o número do formulário 

        $c = 1;                                                            # $C recebe 1
        $mult = 0;                                                         # $MULT recebe 0
        $num = isset($_GET["opt"])?$_GET["opt"]:0;                         # $NUM recebe o valor colocado em opt(formulario HTML) pelo metodo GET
        echo "Analisando o número <span class='foco'>$num</span> <br/>";   # escreva ... $NUM
        echo "Valores múltiplos: ";

                 //Aqui começo a estrutura de repetição para calcular os números primos, usei o retorno do resto "%", e contar quantos múltiplos ele tem. 
        
                 for ($c = 1; $c<=$num; $c++) {                                     # para $C igual a 1, enquanto $C(1) for menor ou igual a $NUM(GET), adicione 1 a $C(2)
            $mod = $num%$c;                                                # $MOD recebe o modulo da divisão entre $num(GET) e $C(2)

        if  ($mod == 0 && $c >=1) {                                        # se $MOD for igual a 0 e $C(2) >= 1, então
            $mult ++;                                                      # $MULT(0) recebe ele mais 1 ($MULT = 1)
            echo " <span class='foco'>$c</span>";                          # escreva $C(2)

        }
    }
                              //Aqui verifico se é primo ou não 

        echo "<br/>  Total de múltiplos: <span class='foco'>$mult</span>"; # escreva ... $MULT
        if ($mult == 2) {                                                  # se $MULT(2) for igual a 2
            echo "<br/>" . "Resultado: $num " . "<span class ='foco'>" . "É PRIMO" . "</span>"; #escreva ... "PRIMO"
        }
        else {                                                             # senão
            echo "<br/>" . "Resultado: $num " . "<span class ='foco'>" . "NÃO É PRIMO" . "</span>"; #escreva ... "NAO PRIMO"
        }
    ?>

</body>
</html>