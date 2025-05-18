<?php
    $notaUm = $_POST["notaUm"];
    $notaDois = $_POST["notaDois"];
    $resultado = ($notaUm + $notaDois) / 2;

    if ($resultado > 9 && $resultado <= 10) {
        echo "Sua média é $resultado \nNota: A\nVocê foi APROVADO!!";
    }

    else if ($resultado > 7.5 && $resultado <= 9) {
        echo "Sua média é $resultado \nNota: B\nVocê foi APROVADO!!";
    }

    else if ($resultado > 6 && $resultado <= 7.5) {
        echo "Sua média é $resultado \nNota: C\nVocê foi APROVADO!!";
    }

    else if ($resultado > 4 && $resultado <= 6) {
        echo "Sua média é $resultado \nNota: D\nVocê foi REPROVADO!!";
    }

    else if ($resultado >= 0 && $resultado <= 4) {
        echo "Sua média é $resultado \nNota: E\nVocê foi REPROVADO!!";
    }

    else{
        echo "Valor inválido, tente novamente!!";
    }
?>