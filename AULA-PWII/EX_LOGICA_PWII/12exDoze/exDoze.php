<?php
    $valorHora = $_POST["valorHora"];
    $horasMes = $_POST["horasMes"];
    $salrioBruto = ($valorHora * $horasMes);
    $sindicato = $salrioBruto * 0.03;
    $fgts = $salrioBruto * 0.08;
    $impostoRenda;
    $salarioLiquido;

    if($salrioBruto <= 2259.20){
        $impostoRenda = 0;
        $salarioLiquido = $salrioBruto  - $sindicato - $impostoRenda;

        echo "Salario Bruto: R$ $salarioBruto\nSindicato: R$ $sindicato\nFGTS: R$ $fgts\nImposto de Renda: Isento\nSalario Liquido: R$ $salarioLiquido";
    }

    else if($salrioBruto > 2259.20 && $salarioBruto <= 2826.65){
        $impostoRenda = $salarioBruto * 0.075;
        $salarioLiquido = $salrioBruto  - $sindicato - $impostoRenda;

        echo "Salario Bruto: R$ $salarioBruto\nSindicato: R$ $sindicato\nFGTS: R$ $fgts\nImposto de Renda: 7,5%\nSalario Liquido: R$ $salarioLiquido";
    }

    else if($salrioBruto > 2826.65 && $salarioBruto <= 3751.05){
        $impostoRenda = $salarioBruto * 0.15;
        $salarioLiquido = $salrioBruto  - $sindicato - $impostoRenda;

        echo "Salario Bruto: R$ $salarioBruto\nSindicato: R$ $sindicato\nFGTS: R$ $fgts\nImposto de Renda: 15%\nSalario Liquido: R$ $salarioLiquido";
    }

    else if($salrioBruto > 3751.05 && $salarioBruto <= 4664.68){
        $impostoRenda = $salarioBruto * 0.225;
        $salarioLiquido = $salrioBruto  - $sindicato - $impostoRenda;

        echo "Salario Bruto: R$ $salarioBruto\nSindicato: R$ $sindicato\nFGTS: R$ $fgts\nImposto de Renda: 22,5%\nSalario Liquido: R$ $salarioLiquido";
    }

    else if($salarioBruto > 4664.68){
        $impostoRenda = $salarioBruto * 0.275;
        $salarioLiquido = $salrioBruto  - $sindicato - $impostoRenda;

        echo "Salario Bruto: R$ $salarioBruto\nSindicato: R$ $sindicato\nFGTS: R$ $fgts\nImposto de Renda: 27,5%\nSalario Liquido: R$ $salarioLiquido";
    }

    else{
        echo "Valor Inválido, tente novamente!";
    }
?>