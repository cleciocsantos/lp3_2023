<?php include "operacoes.php"; ?>
<html>
    <head>
        <title>Chamada de função</title>
    </head>
    <body>
        <?php
            /*$n1 = 2;
            $n2 = 3;
            $resp1 = soma_valores($n1, $n2);
            $resp2 = dobro($n2);
            echo "A soma de $n1 e $n2 é $resp1.<br>";
            echo "O dobro de $n2 é $resp2.<br>";*/

            echo "<br>ATV2 -- item a <br>";
            $precos = array(5, 60, 120, 40, 50, 130);
            $valor = 45;
            $quantidade = preco_inferior($precos, $valor);
            echo $quantidade;

            echo "<br>ATV2 -- item b <br>";
            $nomes = array("caneta", "caderno", "teclado", "fone", "mochila", "mouse");
            $precos = array(5, 60, 120, 40, 50, 130);
            $minimo = 50;
            $maximo = 100;
            preco_entre($nomes, $precos, $minimo, $maximo);

            echo "<br>ATV2 -- desafio extra <br>";
            $precos = array(5, 60, 120, 40, 50, 130);
            $valor = 100;
            $media = preco_superior($precos, $valor);
            echo $media;
        ?>
    </body>
</html>