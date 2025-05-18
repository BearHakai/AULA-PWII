<?php
    $numberUm = $_POST["numberUm"];
    $numberDois = $_POST["numberDois"];
    $numberTres = $_POST["numberTres"];

    if($numberUm >  $numberDois && $numberDois > $numberTres){
        echo "Em Ordem Decrescente: - $numberUm - $numberDois - $numberTres";
    }

    else if($numberUm >  $numberDois && $numberDois < $numberTres){
        echo "Em Ordem Decrescente: - $numberUm - $numberTres - $numberDois";
    }

    else if($numberUm <  $numberDois && $numberUm > $numberTres){
        echo "Em Ordem Decrescente: - $numberDois - $numberUm - $numberTres";
    }

    else if($numberUm <  $numberDois && $numberUm < $numberTres){
        echo "Em Ordem Decrescente: - $numberDois - $numberTres - $numberUm";
    }

    else if($numberTres >  $numberDois && $numberDois > $numberUm){
        echo "Em Ordem Decrescente: - $numberTres - $numberDois - $numberUm";
    }

    else if($numberTres >  $numberDois && $numberDois < $numberUm){
        echo "Em Ordem Decrescente: - $numberTres - $numberUm - $numberDois";
    }

    else if($numberUm ==  $numberDois && $numberDois > $numberTres){
        echo "Em Ordem Decrescente: - $numberUm - $numberTres";
    }

    else if($numberUm ==  $numberTres && $numberDois < $numberTres){
        echo "Em Ordem Decrescente: - $numberUm - $numberDois";
    }

    else if($numberTres ==  $numberDois && $numberDois > $numberUm){
        echo "Em Ordem Decrescente: - $numberDois - $numberUm";
    }

    else if($numberUm ==  $numberDois && $numberDois == $numberTres){
        echo "Em Ordem Decrescente: $numberUm";
    }

    else{
        echo "Valor Inválido, insira novamente!!";
    }
?>