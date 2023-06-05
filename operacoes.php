<?php
    function soma_valores($valor1, $valor2){
        $soma = $valor1 + $valor2;
        return $soma;
    }

    function dobro($valor){
        $valor = 2 * $valor;
        return $valor;
    }

    function preco_inferior($precos, $valor){
        $quantidade = 0;
        foreach($precos as $preco){
            if($preco < $valor){
                $quantidade++;
            }
        }
        return $quantidade;
    }

    function preco_entre($nomes, $precos, $minimo, $maximo){
        for($i=0; $i < sizeof($precos); $i++){
            if($precos[$i] >= $minimo and $precos[$i] <= $maximo){
                echo $nomes[$i]. "<br>";
            }
        }
    }

    function preco_superior($precos, $valor){
        $quantidade = 0;
        $soma = 0;
        foreach($precos as $preco){
            if($preco > $valor){
                $quantidade++;
                $soma += $preco;
            }
        }
        $media = $soma/$quantidade;
        return $media;
    }
?>