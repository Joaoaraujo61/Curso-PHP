<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula 17</title>
</head>
<body>
    <style>

        h1 {
            text-align: center;
            font-size: 20pt;
        }       
        body {
            font-size: 20pt;
        }
    </style>
    <h1>
    Funções String<hr></br>
     <?php
     
     print "<br><h1>14° função: STRTOLOWER <br> Deixa toda uma string com letras minusculas </h1><br>";
     $nome = "João Pedro";
     print ("Seu nome é " . strtolower($nome));
     print "<br><h1>15° função: STRTOUPPER <br> Deixa toda uma string com letras maiusculas </h1><br>";
     $nome = "Joao Pedro";
     print ("Seu nome é " . strtoupper($nome));
     print "<br><h1>16° função: UCFIRST <br> Deixa a primeira letra de uma string em maiusculas </h1><br>";
     $nome = "joao pedro";
     print ("Seu nome é " . ucfirst($nome));
     print "<br><h1>17° função: UCWORDS<br> Deixa a primeira letra de cada palavra em maiusculas </h1><br>";
     $nome = "joao pedro";
     print ("Seu nome é " . ucwords($nome));
     print "<br><h1>18° função: SRTREV <br> Deixa a string ao contrario</h1><br>";
     $nome = "joao pedro";
     print ("Seu nome ao contrario é " . strrev($nome));
     print "<br><h1>19° função: STRPOS <br> Para localizar parte de uma string </h1><br>";
     $frase = "Estou aprendendo PHP";
     $pos = strpos($frase, "PHP");
     print "Na frase $frase";
     print ", a string PHP foi encontrada na posição $pos";
     print "<br><h1>20° função: STRIPOS <br> Para localizar parte de uma string independete se estiver minuscula ou maiuscula</h1><br>";
     $frase = "Estou aprendendo PHP";
     $pos = stripos($frase, "php");
     print "Na frase $frase";
     print ", a string PHP foi encontrada na posição $pos";
     print "<br><h1>21° função: SUBSTR_COUNT <br> Param contar quantas vezes uma parte de uma string apareceu </h1><br>";
     $frase = "Estou aprendendo PHP no Curso em Video de PHP";
     $count = substr_count($frase, "PHP");
     print "Na frase $frase";
     print ", a string PHP foi encontrada $count vezes";
     print "<br><h1>22° função: SUBSTR <br> Para cortar parte de uma string </h1><br>";
     $frase = "Estou aprendendo PHP";
     $sub = substr($frase, 0,5);/*Pegara somente os valores entre a posição 0 e 5, existem outros parametro que podem ser passados então pesquise*/
     print $sub;
     print "<br><h1>23° função: STR_PAD <br> Para uma string caber em um determinado espaço</h1><br>";
     $frase = "Cachorro";
     $pad = str_pad($frase , 30 , "." , STR_PAD_RIGHT);/* 30 é para saber o espaço que deve ser ocupado pela string "cachorro", o ponto entre aspas 
     " " é o que vai complementar "cachorro" para caber em 30 de tamanho e o STR_PAD_RIGHT para mostrar o lado em que deve ser complementado com os
     ponyos entre aspas nesse caso para a direita pode ser colocado tambem os valores CENTER e LEFT*/
     print "O $pad";
     print "<br><h1>24° função: STR_REPEAT <br> Para repetir uma string </h1><br>";
     $string = str_repeat("PHP ", 5);
     print $string;
     print "<br><h1>25° função: STR_REPLACE <br> Para substituir parte de uma string</h1><br>";
     $frs = "Gosto de estudar Matematica";
     $repl = str_replace("Matematica","PHP",$frs);/* Para ignorar se eu coloquei minuscula ou maiuscula então STR_IREPLACE() */
     print $repl;

     ?>

</body>
</html>