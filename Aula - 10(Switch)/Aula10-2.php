<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 10  - 1</title>
</head>
<body>
    <style>

        body {
            text-align: center;
        }

    </style>
    <h1>
    Condicional Switch<hr></br>
     <?php
     
        $diaSem = isset($_GET["ds"])?$_GET["ds"]:0;
        switch($diaSem){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar! :)";
                break;
            case 7:
            case 1:
            case 8:
                echo "Fica em casa! ;)";
                break;
            default:
                echo "<h1>404</h1><br/><h3>ERROR<h3>!";
                
        }

     ?>

        <a href="Aula10-2.html"><br/>VOLTAR</a>

</body>
</html>