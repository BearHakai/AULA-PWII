<?php
    $ladoUm = $_POST["ladoUm"];
    $ladoDois = $_POST["ladoDois"];
    $ladoTres = $_POST["ladoTres"];

    if($ladoUm == $ladoDois && $ladoDois == $ladoTres){
        echo "O Triângulo é Equilátero";
    }

    else if($ladoUm != $ladoDois && $ladoDois != $ladoTres){
        echo "O Triângulo é Escaleno";
    }

    else if($ladoUm == $ladoDois && $ladoDois != $ladoTres){
        echo "O Triângulo é Isóceles";
    }

    else if($ladoUm == $ladoTres && $ladoDois != $ladoTres){
        echo "O Triângulo é Isóceles";
    }

    else if($ladoUm != $ladoDois && $ladoDois == $ladoTres){
        echo "O Triângulo é Isóceles";
    }

    else{
        echo "Valor Inválido, Tente novamente";
    }
?>