<?php
    function soma_valores($valor1, $valor2){
        $soma = $valor1 + $valor2;
        echo "A soma de $valor1 e $valor2 é $soma <br>";
    }

    function adicao_valores($valor1, $valor2){
        $soma = $valor1 + $valor2;
        return $soma;
    }    

    $n1 = 10;
    $n2 = 20;
    soma_valores($n1, $n2);
    echo adicao_valores($n1, $n2);

    echo "<br><b>Exemplo Array</b><br>";

    function clubes(){
        global $clubes;
        $clubes[] = "Flamengo";
        $clubes[] = "Vasco";
        $clubes[] = "Fluminense";
        $clubes[] = "Botafogo";
        return $clubes;
    }

    foreach(clubes() as $clube){
        echo $clube."<br>";
    }

    echo "<br><b>Exemplo escopo de variáveis</b><br>";

    function formata_nome(){
        $prim_nome = "Maria";
        $sobrenome = "Silva";
        global $nome;
        $nome = $sobrenome.", ".$prim_nome;
    }
    formata_nome();
    echo $nome;

    echo "<br><b>Passagem de parâmetros por valor e por referência</b><br>";
    function dobro($valor){
        $valor = 2 * $valor;
    }
    function duplica(&$valor){
        $valor = 2 * $valor;
    }
    $valor = 5;
    dobro($valor);
    echo $valor."<br>";
    duplica($valor);
    echo $valor."<br>";

    echo "<br><b>Valor-padrão de parâmetro</b><br>";
    
    function dois_valores($valor1, $valor2=10){
        echo "Os valores são $valor1 e $valor2 <br>";
    }

    dois_valores(5, 15);
    dois_valores(7);



?>