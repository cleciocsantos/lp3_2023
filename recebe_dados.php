<html>
    <head>
        <title>Recebe Dados</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];
            $email = $_POST["email"];

            $erro = 0;
            if(empty($nome) OR strstr($nome, " ") == FALSE){
                echo "Preencha seu nome com sobrenome";
                $erro = 1;
            }
            
            if($erro == 0){
                echo "Nome: $nome <br>";
                echo "Idade: $idade <br>";
                echo "E-mail: $email <br>";
            }
        ?>
    </body>
</html>