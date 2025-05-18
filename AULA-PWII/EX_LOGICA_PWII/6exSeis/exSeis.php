<?php
    $numberUm = $_POST["numberUm"];
    $numberDois = $_POST["numberDois"];
    $numberTres = $_POST["numberTres"];

    if($numberUm >  $numberDois && $numberUm > $numberTres){
        echo "O $numberUm é o maior número";
    }

    else if($numberUm <  $numberDois && $numberDois > $numberTres){
        echo "O $numberDois é o maior número";
    }

    else if($numberTres >  $numberDois && $numberTres > $numberUm){
        echo "O $numberTres é o maior número";
    }

    else if($numberUm ==  $numberDois && $numberDois > $numberTres){
        echo "O $numberUm é o maior número";
    }

    else if($numberUm ==  $numberTres && $numberDois < $numberTres){
        echo "O $numberUm é o maior número";
    }

    else if($numberTres ==  $numberDois && $numberDois > $numberUm){
        echo "O $numberDois é o maior número";
    }

    else if($numberUm ==  $numberDois && $numberDois == $numberTres){
        echo "O $numberUm é o maior número";
    }

    else{
        echo "Valor Inválido, insira novamente!!";
    }
?>