<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>Aula - 16</title>
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
     
     print "<h1>1° função: PRINTF <br> Para escrever formatado, sem usar o number_format()</h1>";
     $prdt = "Leite";
     $prec = 4.5;
     //print "O $prdt custa R$ " . number_format($prec,2);
     printf ("<br> O %s custa R$ %.2f", $prdt, $prec); /*O $s é para falar que é uma string e o %f para falar que é um 
     numero e o ".2" antes do %f, depois coloca as variaveis que serão substituidas respectivamente pelo falado acima
     para mostrar so duas casas decimais, tambem %d para decimal + ou -, %u para decimal e so +, $f para numero real,
     %s para string e etc...*/
     print "<br><h1>2° função: PRINT_R <br> Para vetores </h1><br>";
     $v[0] = 4;
     $v[1] = 8;
     $v[2] = 3;
     print_r( $v);#OU "var_dump()" ou "var_export()"
     print "<br><h1>3° função: WORDWRAP <br> Para quebra de linha</h1><br>";
     $t = "Como podemos ver aqui temos um texto gigante criado com PHP no VS code acho que essa string já pode acabar";
     $r = wordwrap($t, 20, "<br/>" , false); /* O 30 é a quantidade de letras que ficaram em um linha e o <br> para isso ser visual, senão colocassemos 
     isso a quebra de linha iria aparecer somente no codigo fonte da pagina, o N é para o <br> ficar aparente no codigo fonte e o FALSE para não
     cortar palavras, mas se quisesse que cortasse palavras colocaria TRUE*/
     print $r;
     print "<br><h1>4° função: STRLEN <br> Mostra a quantidade de caracteres em uma String</h1><br>";
     $frase = "João pedro de Araújo Dias";
     $qtd = strlen($frase);
     print "O nome $frase tem $qtd caracteres contando letras e espaços";
     print "<br><h1>5° função: TRIM <br> Para tirar espaços antes e ao final de uma frase</h1><br>";
     print "<br><h1>6° função: LTRIM <br> Para tirar espaços somente antes de uma frase</h1><br>";
     print "<br><h1>7° função: LTRIM <br> Para tirar espaços somente ao final de uma frase</h1><br>";
     print "<br><h1>8° função: STR_WORD_COUNT <br> Para contar quantas palavras tem em uma frase</h1><br>";
     $frase = "O gato comeu o rato";
     $cont = str_word_count($frase, 0);/*0 conta as palavras, 1 coloca cada uma em um vetor e 2 coloca as palavras dentro de um vetor e com o 
     indice de cada uma de acordo com o seu posicionamento*/
     print "A frase $frase tem $cont palavras";
     print "<br><h1>9° função: EXPLODE <br> Para colocar palavras de uma frase em vetores</h1><br>";
     $nome = "João Pedro";
     $vetor = explode(" ", $nome); /* O espaço dentro das aspas servem para mostrar o que vai diferenciar o que vai ser colocado em um vetor */
     print_r($vetor);
     print "<br><h1>10° função: STR_SPLIT <br> Para colocar letras de uma palavra em vetores</h1><br>";
     $nomm = "Curri";
     $contt = str_split($nomm);
     print_r($contt);
     print "<br><h1>11° função: IMPLODE <br> Para juntar vetores escolhendo o separamento</h1><br>";
     $vetoor[1] = "Curso";
     $vetoor[2] = "em";
     $vetoor[3] = "Vídeo";
     $junt = implode("#", $vetoor); /*O # entre aspas é para mostrar o que vai separar as strings tambem poderia ser usada a função join() */
     print $junt;
     print "<br><h1>12° função: CHR <br> Para pegar valor do teclado por meio de codigos de cada tecla</h1><br>";
     $ltr = chr(67); /* 67 é o codigo da letra C em maiúsculo */
     print "O valor que esta na tecla com codigo 67 é $ltr";
     print "<br><h1>13° função: ORD <br> Para pegar codigo de uma letra no teclado </h1><br>";
     $cod = "f";
     $ord = ord($cod);
     print "O código da letra "; 

     ?>
" f " em minusculo é
<?php print $ord ?>
</body>
</html>