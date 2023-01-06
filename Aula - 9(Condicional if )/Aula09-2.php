<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 09 - 2</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Estrutura IF complexa<hr></br>
     <?php
     
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Voce nasceu em $a e tem $i anos.";
        if($i<16) {
            $tipoVoto = "não vota";
        }
        elseif (($i >=16 && $i<18) || ($i > 65)) {
                $tipoVoto = "voto opcional";
            }
            else {
                $tipoVoto = "voto obrigatorio";
            }
        
        echo "<br/>Para essa idade, $tipoVoto";
     ?>

        <a href="Aula09-2.html"><br/>Votar</a>

</body>
</html>