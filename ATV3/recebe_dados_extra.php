<html>
    <head>
        <title>Recebe dados Extra</title>
        <meta charset="UTF-8"> 
     </head>
     <body>
        <?php
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $dt_nasc = $_POST["dt_nasc"];
            $cartao = $_POST["cartao"];

            $erro = 0;
            if(empty($nome) OR strstr($nome, " ") == FALSE){
                echo "Favor, preencha seu nome completo. <br>";
                $erro = 1;
            }
           
            if(strlen($email) < 10 or strstr($email, "@") == FALSE){
                echo "Favor, digite o e-mail corretamente com pelo menos 10 caracteres. <br>";
                $erro = 1;
            }
            
            if(empty($dt_nasc)){
                echo "Favor, digite uma data de nascimento válida. <br>";
                $erro = 1;
            }

            if(empty($cartao)){
                echo "Favor, selecione a bandeira do seu cartão. <br>";
                $erro = 1;
            }
            
            if($erro == 0){
                echo "Nome: $nome <br>";
                echo "E-mail: $email <br>";
                echo "Data de Nascimento: $dt_nasc <br>";
                echo "Bandeira do cartão: $cartao <br>";
            }
        ?>
    </body>
</html>