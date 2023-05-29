<?php
    $vetor = array(1,3,5,8);
    echo "---------- Solução com for e if ----- <br>";
    for($i=0; $i < sizeof($vetor); $i++){
        if($vetor[$i] % 2 == 0){
            echo "O número ".$vetor[$i]. " é par.<br>";
        }
        else{
            echo "O número ".$vetor[$i]. " é ímpar.<br>";
        }
    }

    echo "---------- Solução com while e switch case ----- <br>";
    $i=0;
    while($i < sizeof($vetor)){
        $resto = $vetor[$i] % 2;
        switch($resto){
            case 0:
                echo "O número ".$vetor[$i]. " é par.<br>";
                break;
            default:
                echo "O número ".$vetor[$i]. " é ímpar.<br>";
                break;
        }
        $i++;
    }
    echo "---------- Solução com foreach e if ----- <br>";
    foreach($vetor as $v){
        if($v % 2 == 0){
            echo "O número $v é par.<br>";
        }
        else{
            echo "O número $v é ímpar.<br>";
        }
    }
?>