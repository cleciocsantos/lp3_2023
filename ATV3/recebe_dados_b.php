<html>
    <head>
        <title>Recebe dados B</title>
        <meta charset="UTF-8"> 
     </head>
     <body>
        <?php
            $login = $_POST["login"];
            $senha = $_POST["senha"];

            $erro = 0;
            if(strlen($login) < 5){
                echo "Favor, preencha o login com pelo menos 5 caracteres.<br>";
                $erro = 1;
            }

            if(strlen($senha) < 8){
                echo "Favor, preencha a senha com pelo menos 8 caracteres.<br>";
                $erro = 1;
            }

            if($erro == 0){
                if($login == "ds302" && $senha == "informática"){
                    echo "Autenticação realizada com sucesso";
                }
                else{
                    echo "Você não tem permissão para visualizar essa página";
                }
            }
        ?>
    </body>
</html>