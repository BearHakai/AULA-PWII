<?php
    $semana = $_POST["semana"];

    if($semana == 1){
        echo "Dia da Semana 1 - Domingo";
    }

    else if($semana == 2){
        echo "Dia da Semana 2 - Segunda";
    }

    else if($semana == 3){
        echo "Dia da Semana 3 - Terça-feira";
    }

    else if($semana == 4){
        echo "Dia da Semana 4 - Quarta-feira";
    }

    else if($semana == 5){
        echo "Dia da Semana 5 - Quinta-feira";
    }

    else if($semana == 6){
        echo "Dia da Semana 6 - Sexta-feira";
    }

    else if($semana == 7){
        echo "Dia da Semana 7 - Sabado";
    }

    else {
        echo "Valor Inválido, tente novamente!";
    }
?>