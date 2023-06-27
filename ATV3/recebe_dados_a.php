<html>
    <head>
        <title>Recebe dados A</title>
        <meta charset="UTF-8"> 
     </head>
     <body>
        <?php
            $nome = $_GET["nome"];
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $nota3 = $_GET["nota3"];

            $erro = 0;
            if(empty($nome) or strstr($nome, " ") == false){
                echo "Favor, preencha seu nome com sobrenome.<br>";
                $erro = 1;
            }

            if(is_numeric($nota1) == false or $nota1 > 10 or $nota1 < 0){
                echo "Favor, preencha a nota 1 com um número de 0 a 10.<br>";
                $erro = 1;
            }

            if(is_numeric($nota2) == false or $nota2 > 10 or $nota2 < 0){
                echo "Favor, preencha a nota 2 com um número de 0 a 10.<br>";
                $erro = 1;
            }

            if(is_numeric($nota3) == false or $nota3 > 10 or $nota3 < 0){
                echo "Favor, preencha a nota 3 com um número de 0 a 10.<br>";
                $erro = 1;
            }
            if($erro == 0){
                $media=($nota1 + $nota2 + $nota3)/3;
                echo "Nome: $nome <br>";
                echo "Média: $media <br>";
            }
        ?>
    </body>
</html>