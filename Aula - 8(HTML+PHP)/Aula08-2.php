<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8"/>
    <title>Aula 08 - 2</title>

</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Formulario<hr></br>
     <?php

        $nome = isset($_GET["nome"])?$_GET["nome"]:"NOME NÃO INFORMADO";#Quando não tiver os dados informados então, "se tiver os dados do nome então escreva-os senão escreva 'NOME NÃO INFORMADO'"
        $ano = isset($_GET["ano"])?$_GET["ano"]:"ANO NÃO INFORMADO";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"SEXO NÃO INFORMADO";
        $idade = date("Y") - $ano; #O date("Y") é para mostrar o ano atual
        echo "$nome é $sexo e tem $idade anos";

     ?>

        <a href="Aula08-2.html"><br/>Voltar</a>

</body>
</html>