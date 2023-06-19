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
                echo "Preencha seu nome com sobrenome.<br>";
                $erro = 1;
            }
            if(is_numeric($idade) == FALSE){
                echo "Favor, digitar um número no campo idade.<br>";
                $erro = 1;
            }
            if(strlen($email) < 8 || strstr($email, "@") == FALSE){
                echo "Favor, digitar o e-mail com pelo menos 8 caracteres.<br>";
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