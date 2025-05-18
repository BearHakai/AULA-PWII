<?php
    $nome = $_POST["funcionario"];
    $salarioAtual = $_POST["salario"];
    $reajuste;
    $salarioFinal;

    if($salarioAtual <= 280){
        $reajuste = $salarioAtual * 0.20;
        $salarioFinal = $salarioAtual + $reajuste;

        echo "Olá $nome\nSalario Atual: R$ $salarioAtual\nReajuste: 20%\nValor do Aumento: R$ $reajuste\nSalario Final: R$ $salarioFinal";
    }

    else if($salarioAtual > 280 && $salarioAtual < 700){
        $reajuste = $salarioAtual * 0.15;
        $salarioFinal = $salarioAtual + $reajuste;

        echo "Olá $nome\nSalario Atual: R$ $salarioAtual\nReajuste: 15%\nValor do Aumento: R$ $reajuste\nSalario Final: R$ $salarioFinal";
    }

    else if($salarioAtual > 700 && $salarioAtual < 1500){
        $reajuste = $salarioAtual * 0.10;
        $salarioFinal = $salarioAtual + $reajuste;

        echo "Olá $nome\nSalario Atual: R$ $salarioAtual\nReajuste: 10%\nValor do Aumento: R$ $reajuste\nSalario Final: R$ $salarioFinal";
    }

    else if($salarioAtual >= 1500){
        $reajuste = $salarioAtual * 0.05;
        $salarioFinal = $salarioAtual + $reajuste;

        echo "Olá $nome\nSalario Atual: R$ $salarioAtual\nReajuste: 5%\nValor do Aumento: R$ $reajuste\nSalario Final: R$ $salarioFinal";
    }

    else{
        echo "Valor Inválido, tente Novamente!!";
    }
?>