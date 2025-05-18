<?php
    $periodo = $_POST["periodo"];

    if($periodo == "m" || $periodo == "M" || $periodo == "Matutino" || $periodo == "matutino"){
        echo "Bom dia!!";
    }

    else if($periodo == "v" || $periodo == "V" || $periodo == "Vespertino" || $periodo == "vespertino"){
        echo "Boa Tarde!!";
    }

    else if($periodo == "n" || $periodo == "N" || $periodo == "Noturno" || $periodo == "noturno"){
        echo "Boa Noite!!";
    }

    else{
        echo "Valor Inválido!!";
    }
?>