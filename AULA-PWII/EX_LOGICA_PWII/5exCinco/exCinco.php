<?php
    $notaUm = $_POST["notaUm"];
    $notaDois = $_POST["notaDois"];
    $resultado = ($notaUm + $notaDois) / 2;

    if ($resultado >= 7) {
        echo "Sua média é $resultado e Você foi Aprovado!!";
    }

    else if ($resultado < 7) {
        echo "Sua média é $resultado e Você foi Reprovado!!";
    }

    else if ($resultado == 10) {
        echo "Sua média é $resultado e Você foi Aprovado com Distinção!!";
    }

    else{
        echo "Valor inválido, tente novamente!!";
    }
?>