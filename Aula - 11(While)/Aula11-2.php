<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 11 - 2</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Repetição While<hr></br>
    <form method="get" action="Aula11-2c.php">

<?php
    $c = 1;
    While ($c <= 5) {
        echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
        $c++;
    }
?>

<input type="submit" value="Enviar"/>
</form>

</body>
</html>