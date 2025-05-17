<?php
    $number = $_POST["number"];

    if ($number < 0) {
        echo"O Número é Negativo";
    }

    else if ($number > 0) {
        echo"O Número é Positivo";
    }

    else if ($number == 0) {
        echo"O Número é 0";
    }

    else {
        echo "O valor é inválido, tente novamente!!";
    }
?>