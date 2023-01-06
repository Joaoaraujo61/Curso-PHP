<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 13 - 2</title>
</head>
<body>
  
    <form method="get" action="Aula13-2-2.php">
        <select name="num">
            <?php

                for($n = 1; $n <= 10; $n++){
                    echo "<option>$n</option>";
                }

            ?>
        </select>
        <input type="submit" value="Tabuada"/>
    </form>

</body>
</html>