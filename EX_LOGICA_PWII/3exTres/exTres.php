<?php
    $nome = $_POST["nome"];
    $gen = $_POST["genero"];

    if ($gen == "f" || $gen == "F" || $gen == "Feminino"|| $gen == "feminino") {
        echo"Olá $nome, você é do gênero Feminino";
    }

    else if ($gen == "m" || $gen == "M" || $gen == "Maculino" || $gen == "masculino") {
        echo"Olá $nome, você é do gênero Masculino";
    }

    else {
        echo "Valor inválido, tente novamente!!";
    }
?>