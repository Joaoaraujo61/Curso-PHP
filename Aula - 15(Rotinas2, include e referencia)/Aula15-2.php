<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 15 - 2</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Inclusão de Arquivos Externos<hr></br>
     <?php
     
        include "funcoes-2.php"; /*para chamar codigos de outro arquivo, nesse caso para funções, mas para requerir um
        arquivo, ou seja, o programa so roda com esse arquivo é so substituir o "include" por "require", se eu querer
        incluir o requeriri so uma vez "include_once" ou "require_once" */
        $a = 1;
        soma1($a);
        print "<br/>";
        ola();

     ?>

</body>
</html>