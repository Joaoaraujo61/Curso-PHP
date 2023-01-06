<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8"/>
    <title>Aula 08 - 3</title>
    <?php
    
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto gernerico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";

    ?>

</head>
<body>
    <style>

        body {
            text-align: center;
        }
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <h1>
    Formatação de texto<hr></br>
     <?php
     
        echo "<span class='texto'>$txt</span>";

     ?>

        <a href="Aula08-3.html"></br>Voltar</a>

</body>
</html>