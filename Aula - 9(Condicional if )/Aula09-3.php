<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 09 - 3</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }
        span {
            color: red;
        }
    </style>
    <h1>
    Situação de Aluno<hr></br>
     <?php
     
        $nota1 = isset($_GET["n1"])?$_GET["n1"]:"Não Informado";
        $nota2 = isset($_GET["n2"])?$_GET["n2"]:"Não Informado";
        $media = ($nota1 + $nota2)/2;
        echo "A média entre <span>$nota1</span> e <span>$nota2</span> é igual a <span>$media</span>";
           
        if($media >= 5 && $media<= 10) {
            $sit = "APROVADO";
        }
        elseif($media == 4) {
            $sit = "RECUPERAÇÃO";
        }
            elseif ($media <4) {
                $sit = "REPROVADO";
            }
            else{
                $sit = "INVÁLIDA";
            }

        echo "<br/>Situação do aluno: <span>$sit</span>";

     ?>

        <a href="Aula09-3.html"><br/>Votar</a>

</body>
</html>