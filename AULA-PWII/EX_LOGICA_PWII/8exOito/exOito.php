<?php
    $nomeUm = $_POST["nomeUm"];
    $valorUm = $_POST["produtoUm"];
    $nomeDois = $_POST["nomeDois"];
    $valorDois = $_POST["produtoDois"];
    $nomeTres = $_POST["nomeTres"];
    $valorTres = $_POST["produtoTres"];

    if($valorUm <  $valorDois && $valorUm < $valorTres){
        echo "O $nomeUm é o melhor produto para se comprar, custando R$ $valorUm";
    }

    else if($valorDois <  $valorUm && $valorDois < $valorTres){
        echo "O $nomeDois é o melhor produto para se comprar, custando R$ $valorDois";
    }

    else if($valorTres <  $valorDois && $valorTres < $valorUm){
        echo "O $nomeTres é o melhor produto para se comprar, custando R$ $valorTres";
    }

    else if($valorUm ==  $valorDois && $valorDois < $valorTres){
        echo "O produto $nomeUm e o $nomeDois são os mais baratos custando R$ $valorUm";
    }

    else if($valorUm ==  $valorTres && $valorDois > $valorTres){
        echo "O produto $nomeUm e o $nomeTres são os mais baratos custando R$ $valorUm";
    }

    else if($valorTres ==  $valorDois && $valorDois < $valorUm){
        echo "O produto $nomeTres e o $nomeDois são os mais baratos custando R$ $valorDois";
    }

    else if($valorUm ==  $valorDois && $valorDois == $valorTres){
        echo "Os Três Produtos custam o mesmo valor, custnado R$ $valorUm";
    }

    else{
        echo "Valor Inválido, insira novamente!!";
    }
?>